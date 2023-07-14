
<script>
export default {
  props: ['article'],

  methods: {
    go() {
      this.$splade.visit(`posts/${this.article.id}`);
    }
  },

  render() {
    return this.$slots.default({
      actionShow: this.go
    });
  },
};
</script>
