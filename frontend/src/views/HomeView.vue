<template>
  <div class="home">
    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <table class="uk-table uk-table-striped">
            <thead>
              <tr>
                <th>Row Labels</th>
                <th>Count of Selected</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1. Experienced</td>
                <td>{{chartData.datasets[0].data[0]}}</td>
              </tr>
              <tr>
                <td>2. Done(Basic)</td>
                <td>{{chartData.datasets[0].data[1]}}</td>
              </tr>
              <tr>
                <td>3. Learning</td>
                <td>{{chartData.datasets[0].data[2]}}</td>
              </tr>
              <tr>
                <td>4. Not Learnt</td>
                <td>{{chartData.datasets[0].data[3]}}</td>
              </tr>
              <tr>
                <td>5. Not in scope</td>
                <td>1</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <Pie :chart-data="chartData" />
        </div>
      </div>
      <!-- <div>
        <div class="uk-card uk-card-default uk-card-body">

        </div>
      </div> -->
    </div>
  </div>
</template>

<script>
import { Pie } from 'vue-chartjs'

import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  ArcElement,
  CategoryScale
} from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, ArcElement, CategoryScale)


export default {
  name: 'HomeView',
  components: { Pie },
  data() {
    return {
      chartData: {
        labels: ['1. Experienced', '2. Done (Basic)', '3. Learning', '4. Not Learnt'],
        datasets: [
          {
            backgroundColor: ['#41B883', '#FFFF00',  '#00D8FF' , '#E46651' ],
            data: [2, 6, 9, 7]
          }
        ]
      }
    }
  }



}
</script>

<style>
  .experienced{
    background-color: #41B883;
    color: black;
  }

  .basic{
    background-color: #FFFF00;
    color: black;
  }

  .learning{
    background-color: #00D8FF;
    color: black;
  }

  .not-done{
    background-color: #E46651;
    color: black;
  }

  .out-of-scope{
    background-color: grey;
    color: black;
  }
  
</style>
