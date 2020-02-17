<template>
  <el-container>
    <el-header class="px-0 w-100">
      <navigation :has-logged-in="hasLoggedIn"></navigation>
    </el-header>
    <el-main>
      <router-view />
    </el-main>
  </el-container>
</template>

<script>
import navigation from "./Navigation";

export default {
  name: "App",
  components:{
    navigation
  },
  props: {
      hasLoggedIn: {
          type: Boolean,
          default: false,
      }
  }
};
</script>

<style lang="scss">
</style>