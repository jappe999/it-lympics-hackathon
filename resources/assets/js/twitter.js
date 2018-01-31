const app = new Vue({
    el: '#app',
    data: {
      feed: [],
    },
    mounted() {
      this.getFeed()
    },
    methods: {
      getFeed() {
        axios.get('/api/twitter/all')
        .then(response => {
          console.log(response.data)
          this.feed = this.parseFeed(response.data)
        })
        .catch(err => {
          console.error(err)
        })
      },
      parseFeed(feed) {
        let statuses = feed.statuses
        let newFeed = []

        for (let status of statuses) {
          newFeed.push({
            id: status.id,
            text: status.text,
            tags: status.entities.hashtags,
            geo: status.geo,
            created_at: status.created_at,
            user: {
                id: status.user.id,
                name: status.user.name
            }
          })
        }

        return newFeed
      }
    }
});
