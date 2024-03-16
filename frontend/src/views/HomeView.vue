<template>
  <div>
    <div v-if="!isAdmin">
      <div uk-spinner="ratio: 3" v-if="!username"></div>
      <div class="home uk-container uk-container-center" v-if="username">
        <section class="uk-section-default uk-section-xsmall">
          <div class="uk-grid-small uk-grid-match" uk-grid="">
            <div class="uk-width-1-2@m">
              <div class="uk-card uk-card-default uk-card-body">
                <h3>Welcome {{ username }}</h3>
              </div>

              <point-breakdown></point-breakdown>
            </div>

            <div class="uk-width-1-2@m">
              <div class="uk-card uk-card-default uk-card-body">
                <div uk-spinner="ratio: 3" v-if="!loaded"></div>
                <Pie v-if="loaded" :chart-data="this.chartData" />
              </div>
            </div>
          </div>
        </section>

        <section class="uk-section-default uk-section-xsmall">
          <metrics-table></metrics-table>
        </section>
      </div>
    </div>
    <div v-if="isAdmin">
      <div uk-spinner="ratio: 3" v-if="!username"></div>
      <div class="home uk-container uk-container-center" v-if="username">
        <section class="uk-section-default uk-section-xsmall">
          <div class="uk-grid-small uk-grid-match" uk-grid="">
            <div class="uk-width-1-2@m">
              <div class="uk-card uk-card-default uk-card-body">
                <select
                  class="uk-select"
                  aria-label="Select"
                  v-model="this.selectedRole"
                  @change="getAdminData()"
                >
                  <option value="">Select a Role/Team to analyse...</option>
                  <option
                    v-for="(role, idx) in this.roles"
                    v-bind:key="role.id"
                    :value="idx"
                  >
                    {{ role }}
                  </option>
                </select>
              </div>
              <point-breakdown></point-breakdown>
            </div>

            <div class="uk-width-1-2@m">
              <div class="uk-card uk-card-default uk-card-body">
                <div uk-spinner="ratio: 3" v-if="!loaded"></div>
                <Pie v-if="loaded" :chart-data="this.chartData" />
              </div>
            </div>
          </div>
        </section>
        <section class="uk-section-default uk-section-xsmall">
          <metrics-table></metrics-table>
        </section>
      </div>
    </div>
  </div>
</template>

<script>
import { Pie } from "vue-chartjs";

import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  ArcElement,
  CategoryScale,
} from "chart.js";

import PointBreakdown from "../components/PointBreakdown.vue";
import { useMainStore } from "@/stores/mainStore";
import MetricsTable from "../components/MetricsTable.vue";

ChartJS.register(Title, Tooltip, Legend, ArcElement, CategoryScale);

export default {
  name: "HomeView",
  components: { Pie, PointBreakdown, MetricsTable },

  data() {
    return {
      store: useMainStore(),
      selectedRole: "",
    };
  },

  created() {
    this.store.getStartup();
  },

  methods: {
    getAdminData() {
      this.store.getMetrics(this.selectedRole);
      this.store.getAdminChartData(this.selectedRole);
      this.store.getCategories(this.selectedRole);
    },
  },

  computed: {
    username() {
      return this.store.user.name;
    },
    chartData() {
      if (this.store.chartData) {
        return this.store.chartData;
      }
    },
    loaded() {
      return this.store.loaded;
    },
    isAdmin() {
      return this.store.user.roleId == 1;
    },
    roles() {
      return this.store.roles;
    },
  },
};
</script>

<style>
canvas {
  max-height: 53.3vh;
  color: white;
}

.home {
  background-color: #a9cef4;
}

.uk-section-default {
  background-color: #a9cef4;
}

.uk-card {
  background-color: #7ea0b7;
  border-radius: 5px;
}
</style>
