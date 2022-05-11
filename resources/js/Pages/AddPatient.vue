<script>
import ElSideMenu from "../Components/ElSideMenu.vue";
export default {
  name: "Addpatient",
  components: {
    ElSideMenu,
  },
  data() {
    return {};
  },
};
</script>
<template>
  <el-container>
    <el-header>Header</el-header>
    <el-container>
      <ElSideMenu />
      <el-container>
        <el-main>Main</el-main>
        <el-footer>Footer</el-footer>
      </el-container>
    </el-container>
  </el-container>
</template>
<style>
</style>
