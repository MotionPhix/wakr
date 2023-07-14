<!-- <template>
  <button @click="count++">{{ count }}</button>
</template>

<script setup>
import { ref } from "vue";

const count = ref(1);
</script> -->

<script>
export default {
  data() {
    return {
      count: 1
    };
  },

  methods: {
    increase() {
      this.count++;
    }
  },

  render() {
    return this.$slots.default({
      count: this.count,
      increase: this.increase,
    });
  },
};
</script>
