<template>
  <el-main>
    <h1>JSON TO PHP</h1>
    <el-form ref="form">
      <el-form-item required>
        <el-input
          type="textarea"
          autosize
          clearable
          placeholder="Please enter a valid JSON String"
          v-model="json"
        />
      </el-form-item>
      <el-button type="primary" round @click.prevent="convert">Convert</el-button>
    </el-form>
    <hr>
    <div class="container" v-if="result">
      <el-input type="textarea" :rows="10" placeholder="Result" v-model="result"/>
      <el-button type="button" v-clipboard:copy="result" v-clipboard:success="onCopy">Copy!</el-button>
    </div>
  </el-main>
</template>

<script>
import isRegexp from "is-regexp";
import isObj from "is-obj";
import getOwnEnumPropSymbols from "get-own-enumerable-property-symbols";

export default {
  name: "JsonToPhpArray",
  data: () => ({
    json: "",
    result: "",
    seen: [],
  }),
  methods: {
    onCopy(e) {
      this.$alert(
        "Copied! Now format that array already!",
        "Info",
        {
          type: "info",
        },
      );
    },
    convert() {
      let input = "";
      try {
        input = JSON.parse(this.json);
      } catch (error) {
        this.$alert(
          "Not A Valid JSON!",
          "Error",
          {
            type: "error",
          },
        );
        return;
      }
      let options = {
        indent: " ",
      };
      let pad = " ";
      this.result = this.stringify(
        input,
        options,
        pad,
      );
    },
    stringify(input, options, pad) {
      //credit: https://github.com/yeoman/stringify-object/blob/master/index.js
      options.indent = options.indent || "\t";

      let tokens;

      if (
        options.inlineCharacterLimit === undefined
      ) {
        tokens = {
          newLine: "\n",
          newLineOrSpace: "\n",
          pad,
          indent: pad + options.indent,
        };
      } else {
        tokens = {
          newLine:
            "@@__STRINGIFY_OBJECT_NEW_LINE__@@",
          newLineOrSpace:
            "@@__STRINGIFY_OBJECT_NEW_LINE_OR_SPACE__@@",
          pad: "@@__STRINGIFY_OBJECT_PAD__@@",
          indent:
            "@@__STRINGIFY_OBJECT_INDENT__@@",
        };
      }

      const expandWhiteSpace = string => {
        if (
          options.inlineCharacterLimit ===
          undefined
        ) {
          return string;
        }

        const oneLined = string
          .replace(
            new RegExp(tokens.newLine, "g"),
            "",
          )
          .replace(
            new RegExp(
              tokens.newLineOrSpace,
              "g",
            ),
            " ",
          )
          .replace(
            new RegExp(
              tokens.pad + "|" + tokens.indent,
              "g",
            ),
            "",
          );

        if (
          oneLined.length <=
          options.inlineCharacterLimit
        ) {
          return oneLined;
        }

        return string
          .replace(
            new RegExp(
              tokens.newLine +
                "|" +
                tokens.newLineOrSpace,
              "g",
            ),
            "\n",
          )
          .replace(
            new RegExp(tokens.pad, "g"),
            pad,
          )
          .replace(
            new RegExp(tokens.indent, "g"),
            pad + options.indent,
          );
      };

      if (this.seen.indexOf(input) !== -1) {
        return '"[Circular]"';
      }

      if (
        input === null ||
        input === undefined ||
        typeof input === "number" ||
        typeof input === "boolean" ||
        typeof input === "function" ||
        typeof input === "symbol" ||
        isRegexp(input)
      ) {
        return String(input);
      }

      if (input instanceof Date) {
        return `new Date('${input.toISOString()}')`;
      }

      if (Array.isArray(input)) {
        if (input.length === 0) {
          return "[]";
        }

        this.seen.push(input);

        const ret =
          "[" +
          tokens.newLine +
          input
            .map((el, i) => {
              const eol =
                input.length - 1 === i
                  ? tokens.newLine
                  : "," + tokens.newLineOrSpace;

              let value = this.stringify(
                el,
                options,
                pad + options.indent,
              );
              if (options.transform) {
                value = options.transform(
                  input,
                  i,
                  value,
                );
              }

              return tokens.indent + value + eol;
            })
            .join("") +
          tokens.pad +
          "]";

        this.seen.pop();

        return expandWhiteSpace(ret);
      }

      if (isObj(input)) {
        let objKeys = Object.keys(input).concat(
          getOwnEnumPropSymbols(input),
        );

        if (options.filter) {
          objKeys = objKeys.filter(el =>
            options.filter(input, el),
          );
        }

        if (objKeys.length === 0) {
          return "[]";
        }

        this.seen.push(input);

        const ret =
          "[" +
          tokens.newLine +
          objKeys
            .map((el, i) => {
              const eol =
                objKeys.length - 1 === i
                  ? tokens.newLine
                  : "," + tokens.newLineOrSpace;
              const isSymbol =
                typeof el === "symbol";
              const isClassic =
                !isSymbol &&
                /^[a-z$_][a-z$_0-9]*$/i.test(el);
              const key =
                isSymbol || isClassic
                  ? el
                  : this.stringify(el, options);

              let value = this.stringify(
                input[el],
                options,
                pad + options.indent,
              );
              if (options.transform) {
                value = options.transform(
                  input,
                  el,
                  value,
                );
              }

              return (
                tokens.indent +
                `'${String(key)}' => ` +
                value +
                eol
              );
            })
            .join("") +
          tokens.pad +
          "]";

        this.seen.pop();

        return expandWhiteSpace(ret);
      }

      input = String(input).replace(
        /[\r\n]/g,
        x => (x === "\n" ? "\\n" : "\\r"),
      );

      if (options.singleQuotes === false) {
        input = input.replace(/"/g, '\\"');
        return `"${input}"`;
      }

      input = input.replace(/\\?'/g, "\\'");
      return `'${input}'`;
    },
  },
};
</script>
