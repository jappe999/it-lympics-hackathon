import scrollMonitor from 'scrollmonitor'

const app = new Vue({
    el: '#app',
    data: {
      loading: false,
      feed: [],
      next_url: ''
    },
    mounted() {
      this.watchBottom()
    },
    methods: {
      watchBottom() {
        let endFeed = document.getElementById('endfeed')
        let watcher = scrollMonitor.create(endFeed)
        let vm = this

        watcher.enterViewport(function () {
          if (!vm.loading) {
            vm.getFeed()
          }
        })
      },
      getFeed() {
        this.loading = true

        let url = this.next_url ? `/api/instagram/${this.next_url}` : 'api/instagram/all'

        axios.get(url)
        .then(response => {
          if (response.data) {
            let search_metadata = response.data.search_metadata

            if (search_metadata.next_results) {
              this.next_url = search_metadata.next_results
            } else {
              let max_id = response.data.statuses[response.data.statuses.length - 1].id - 1
              this.next_url = `?q=${search_metadata.query}&max_id=${max_id}`
            }

            this.parseFeed(response.data)
          }

          this.loading = false
        })
        .catch(err => {
          console.error(err)
          this.loading = false
        })
      },
      parseFeed(feed) {
        let statuses = feed.statuses

        for (let status of statuses) {
          this.feed.push({
            id: status.id,
            text: status.full_text,
            tags: status.entities.hashtags,
            geo: status.geo,
            created_at: status.created_at,
            user: {
                id: status.user.id,
                name: status.user.name
            }
          })
        }
      }
    }
})
