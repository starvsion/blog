<template>
    <el-menu :default-active="activeIndex" mode="horizontal" @select="redirect">
        <el-menu-item index="/">
            <h3 class="logo">Shuyi(疏義君)</h3>
        </el-menu-item>
        <el-menu-item index="/">Home</el-menu-item>
        <el-menu-item index="/login" class="float right">Login</el-menu-item>
        <el-menu-item index="/register" class="float right">Register</el-menu-item>
        <el-submenu v-if="hasLoggedIn" class="float right" index="/user">
            <template slot="title">User</template>
            <el-menu-item index="/logout">
                <a href="/logout">Logout</a>
            </el-menu-item>
        </el-submenu>
    </el-menu>
</template>

<script>
    export default {
        name: "Navigation",
        props: {
            hasLoggedIn: {
                type: [Boolean, Number],
                default: true
            }
        },
        computed: {
            activeIndex: () => window.location.pathname
        },
        methods: {
            redirect (url) {
                window.location.href = url;
            }
        }
    };
</script>

<style scoped>

</style>