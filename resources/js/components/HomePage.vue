<template>
    <div>

        <div class="bg-image"></div>

        <div class="bg-text">
            <el-row type="flex" justify="space-around" align="top" style="margin-bottom: 40vh">
                <navigation :has-logged-in="false"></navigation>
            </el-row>

            <el-row type="flex" justify="space-around" align="middle">
                <el-col :span="12">
                    <h1>Hi, My name is Shuyi</h1>
                    <p>And I'm a software developer.</p>
                </el-col>
            </el-row>
        </div>


    </div>
</template>

<script>
    export default {
        name: "HomePage"
    };
</script>

<style scoped lang="scss">


    .bg-image {
        /* The image used */
        /* Full height */
        height: 100vh;

        /* Center and scale the image nicely */
        background: linear-gradient(91deg, #041d51, #c10e1f, #f66d9b, #041D51);
        background-size: 400% 400%;

        -webkit-animation: AnimationName 60s ease infinite;
        -moz-animation: AnimationName 60s ease infinite;
        animation: AnimationName 60s ease infinite;
    }

    @-webkit-keyframes AnimationName {
        0% {
            background-position: 0% 50%
        }
        50% {
            background-position: 100% 50%
        }
        100% {
            background-position: 0% 50%
        }
    }

    @-moz-keyframes AnimationName {
        0% {
            background-position: 0% 50%
        }
        50% {
            background-position: 100% 50%
        }
        100% {
            background-position: 0% 50%
        }
    }

    @keyframes AnimationName {
        0% {
            background-position: 0% 50%
        }
        50% {
            background-position: 100% 50%
        }
        100% {
            background-position: 0% 50%
        }
    }


    /* Position text in the middle of the page/image */
    .bg-text {
        background-color: rgba(255, 255, 255, 0.4); /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
        width: 50vw;
        height: 100vh;
        padding: 20px;
        text-align: center;
    }

    .el-menu::v-deep {
        border-bottom: 0 !important;
        background: transparent;
        color: white;
        width: 100%;

        > .el-menu-item {
            color: rgba(255, 255, 255, .8);

            &.logo-item {
                display: none;
            }

            &:focus,&:hover {
                background-color: rgba(255, 255, 255, .5) !important;
            }
        }
    }


</style>
