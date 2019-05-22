<template>
    <el-menu :default-active="activeIndex" mode="horizontal" @select="redirect"
             background-color="#041D51"
             text-color="#fff"
             active-text-color="#C10E1F">
        <el-menu-item index="/" class="logo-item">
            <h3 class="logo">Shuyi(疏義)</h3>
        </el-menu-item>
        <el-menu-item index="/">Home</el-menu-item>
        <el-menu-item index="/resume">Resume</el-menu-item>
        <el-menu-item index="/contact-me">Contact Me</el-menu-item>

        <el-submenu v-if="hasLoggedIn" class="float right" index="/user">
            <template slot="title">User</template>
            <el-menu-item index="/logout">
                <a href="/logout">Logout</a>
            </el-menu-item>
        </el-submenu>
        <el-menu-item index="/login" v-else class="float right">Login</el-menu-item>
    </el-menu>
</template>

<script>
    export default {
        name: "Navigation",
        props: {
            hasLoggedIn: {
                type: [Boolean, Number],
                default: true
            },
            isAdmin: {
                type: [Boolean, Number],
                default: false
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

<style scoped lang="scss">
    .el-menu-item {
        font-style: italic;
        font-weight: 400;

        &.is-active {
            font-weight: 900;
        }
    }

    .logo-item {
        h3 {
            color: #eee;
        }
    }
</style>
