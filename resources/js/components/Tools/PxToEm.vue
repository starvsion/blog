<template>
  <div>
    <h4>Px</h4>
    <el-input v-model="pixel" autofocus />
    <br />
    <br />
    <h4>Base</h4>
    <el-input style="width:1-0" v-model="base" />
    <br />
    <br />
    <h4>Result:</h4>
    <h1>{{ result }}</h1>
    <h1>{{ resultRem }}</h1>
  </div>
</template>

<script>
export default {
  name: "PxToEm",
  data: () => ({
    base: 14,
    pixel: 30
  }),
  computed: {
    result() {
      return this.pixel / this.base + " em";
    },
    resultRem() {
      return this.pixel / 14 + " rem";
    }
  }
};
</script>

<style scoped lang="scss">
input {
  width: 75%;
  height: 20%;
  color: #2c3e50;
  font-size: 20px;
}
</style>
