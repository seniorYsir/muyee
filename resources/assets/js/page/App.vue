<template>
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">
                <span>username:{{info.username}}</span><br>
                <span>level:{{ info.level }}</span>
            </li>
        </ul>
    </div>
</template>

<script>
    import { mapState, mapActions } from 'vuex';
    export default({
        // 映射 vuex 上面的属性
        computed: mapState({
            info: state => state.user.info
        }),
        created() {
            // 获取推荐列表
            this.getInfo();

        },
        methods: {
            // 映射 vuex 对象上的方法
            ...mapActions([
                'getInfo'
            ])
        }
    });
</script>

<style scoped>

</style>