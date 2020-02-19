<template>
    <div class="card-body">
        <h1> Button Click, Get Data section</h1>
        <button v-on:click="getTestPage()"> Get TestPage </button>
        {{testPage}}
    </div>
</template>

<script>
    import gql from 'graphql-tag'
    export default {
        mounted() {
            console.log(this.$apollo)
            console.log('Component mounted.')
        },
        apollo: {
            testPage: {
                query: gql`
                    query testPage($first: Int!) {
                        testPage(first: $first) {
                        data {
                            name
                        }
                    }
                }`,
                variables: { first: 2 },
                skip() {    // skip 메소드 추가
                    return true;
                },
            },
        },
        methods: {
            getTestPage: function () {  // 버튼 클릭 시 데이터를 가져옴
                this.$apollo.queries.testPage.skip = false;
                this.$apollo.queries.testPage.refetch();
            },
        }
    }
</script>
