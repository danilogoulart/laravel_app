<template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">{{ titulo }}</div>
        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
  props: ["titulo", "cor"],
  computed: {
    defineCor: function() {
      return "panel " + (this.cor || "panel-default");
    }
  }
};
</script>

<style media="screen">
    .blue > .panel-heading {
        color: #fff;
        background-color: #0d4a96;
        border-color: #0d4a96;
    }

    .blue {
        border-color: #0d4a96;
    }

    .orange > .panel-heading {
        color: #fff;
        background-color: #e85e0d;
        border-color: #e85e0d;
    }

    .orange {
        border-color: #e85e0d;
    }
</style>

