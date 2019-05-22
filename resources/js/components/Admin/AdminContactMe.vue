<template>
    <el-card v-loading="isBusy">
        <template #header>
            <h3>Contact Me</h3>
        </template>
        <el-scrollbar>
            <el-table
                :data="tableData"
                stripe
                class="w-100">
                <el-table-column type="expand">
                    <template #default="{row}">
                        <p>Message: {{ row.message }}</p>
                    </template>
                </el-table-column>
                <el-table-column
                    prop="id"
                    label="ID">
                </el-table-column>
                <el-table-column
                    prop="name"
                    label="Name">
                </el-table-column>
                <el-table-column
                    prop="email"
                    label="Email Address">
                </el-table-column>
                <el-table-column
                    prop="message"
                    label="Message"
                >
                </el-table-column>
                <el-table-column align="right">
                    <template #header>
                        <el-input
                            v-model="search"
                            size="mini"
                            placeholder="Type to search"/>
                    </template>
                    <template #default="{index, row}">
                        <el-button
                            size="mini"
                            type="danger"
                            @click="handleDelete(index, row)">Delete
                        </el-button>
                    </template>
                </el-table-column>


            </el-table>
        </el-scrollbar>
        <el-pagination
            class="mt-3"
            @size-change="tableDataProvider"
            @current-change="tableDataProvider"
            :current-page.sync="currentPage"
            :page-sizes="[1, 10, 20, 50, 100, 500]"
            :page-size.sync="perPage"
            layout="total, sizes, prev, pager, next, jumper"
            :total="total">
        </el-pagination>
    </el-card>
</template>

<script>
    export default {
        name: "AdminContactMe",
        data: () => {
            return {
                tableData: [],
                currentPage: 0,
                total: 0,
                perPage: 50,
                isBusy: true,
                search: ""
            };
        },
        mounted () {
            this.tableDataProvider();
            this.isBusy = false;
        },
        methods: {
            tableDataProvider () {
                this.isBusy = true;
                axios.get("/contact-me/list", {
                        params: {
                            perPage: this.perPage,
                            page: this.currentPage
                        }
                    })
                    .then((response) => {
                        this.tableData = response.data.data;
                        this.total = response.data.meta.total;
                        this.perPage = parseInt(response.data.meta.per_page);
                        this.currentPage = response.data.meta.current_page;
                    })
                    .catch((error) => {
                        Message.error(error.response.data.message);
                    })
                    .finally(() => {
                        this.isBusy = false;
                    });
            },
            handleDelete (id, data) {

            }
        }
    };
</script>

<style scoped>

</style>
