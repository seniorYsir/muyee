<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ name || 'come on'}}</div>
                    <div class="panel-body">
                        {{msg}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['name'],
        data () {
            return {
                msg: 'the project developed by laravel and vue.'
            }
        }
    }
</script>
