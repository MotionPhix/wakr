import './bootstrap'
import '../css/app.css'
import '@protonemedia/laravel-splade/dist/style.css'
import '@protonemedia/laravel-splade/dist/jodit.css'

import VueApexCharts from 'vue3-apexcharts'

import 'vfonts/Inter.css'

import {
  IconArrowLeft,
  IconArrowUp,
  IconBuildingWarehouse,
  IconChevronDown,
  IconChevronUp,
  IconDeviceMobile,
  IconDots,
  IconDownload,
  IconFileText,
  IconId,
  IconPencil,
  IconPlus,
  IconThumbUp,
  IconTrash,
  IconUpload,
  IconUser,
} from '@tabler/icons-vue'

import { createApp } from 'vue'
import { SpladePlugin, renderSpladeApp } from '@protonemedia/laravel-splade'

import SalesChart from './Components/SalesChart.vue'
import FastSellingChart from './Components/FastSellingChart.vue'
import PhoneCounter from './Components/PhoneCounter.vue'

const el = document.getElementById('app')

createApp({
  render: renderSpladeApp({ el }),
})
  .use(SpladePlugin, {
    max_keep_alive: 10,
    transform_anchors: false,
    progress_bar: true,
    components: {
      SalesChart,
      FastSellingChart,
      IconPencil,
      IconArrowLeft,
      IconBuildingWarehouse,
      IconFileText,
      IconUpload,
      IconDownload,
      IconDeviceMobile,
      IconId,
      IconChevronUp,
      IconChevronDown,
      IconArrowUp,
      IconThumbUp,
      IconDots,
      IconUser,
      IconPlus,
      IconTrash,
      PhoneCounter,
    },
  })
  .use(VueApexCharts)
  .mount(el)
