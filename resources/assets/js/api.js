import axios from 'axios'

export default {
    getInfo:function(params){
        return axios.get('api/test/user',{
            params: params
        })
    }
    // getNewsRecommend: function (params) {
    //     return axios.get('api/news/recommend', {
    //         params: params
    //     })
    // },
    // getNewsLists: function (params) {
    //     return axios.get('api/news', {
    //         params: params
    //     })
    // },
    // getNewsDetail: function (id) {
    //     return axios.get('api/news/' + id)
    // }
}

