<template>
    <el-card class="box-card">
        <template #header class="clearfix">
            <h3>Contact Me</h3>
        </template>
        <el-form ref="form" :model="form" label-position="top">
            <el-form-item label="Your Name">
                <el-input placeholder="placeholder"></el-input>
            </el-form-item>
            <el-form-item label="E-Mail Address">
                <el-input placeholder="placeholder"></el-input>
            </el-form-item>
            <el-form-item label="Message">
                <el-input
                    type="textarea"
                    :rows="4">
                </el-input>
            </el-form-item>
        </el-form>
    </el-card>
</template>

<script>
    export default {
        name: "ContactMe"
    };
</script>

<style scoped>

</style>
