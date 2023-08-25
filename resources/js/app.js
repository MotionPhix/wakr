import "./bootstrap";
import "../css/app.css";
import "@protonemedia/laravel-splade/dist/style.css";
import "@protonemedia/laravel-splade/dist/jodit.css";

import VueApexCharts from "vue3-apexcharts";

import { createApp } from "vue";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";

const el = document.getElementById("app");

import SalesChart from './Components/SalesChart.vue'
import FastSellingChart from './Components/FastSellingChart.vue'
import Post from './Components/Post.vue'

createApp({
    render: renderSpladeApp({ el })
})
    .use(SpladePlugin, {
        "max_keep_alive": 10,
        "transform_anchors": false,
        "progress_bar": true,
        "components": {
            SalesChart,
            FastSellingChart,
            Post
        }
    })
    .use(VueApexCharts)
    .mount(el);
