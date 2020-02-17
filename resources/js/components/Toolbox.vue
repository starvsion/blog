<template>
  <el-card>
    <el-tabs v-model="activeName">
      <el-tab-pane label="JSON to PHP Array" name="JsonToPhp">
        <json-to-php-array />
      </el-tab-pane>
      <el-tab-pane label="PX to EM" name="PxToEm">
        <px-to-em />
      </el-tab-pane>
    </el-tabs>
  </el-card>
</template>

<script>
export default {
  name: "Toolbox",
  computed: {
    activeName: {
      get () {
        let current = window.location.hash.split('#')[1];
        if(!current) {
          current = this.activeName = 'JsonToPhp';
        }

        return current;
      },
      set (val, oldVal) {
        if(val === oldVal) {
          return;
        }

        this.$router.push(`/toolbox#${val}`);
      }
    }
  },
};
</script>