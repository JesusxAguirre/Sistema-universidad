<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>

<body>
  <div class="flex-auto">
    <div class="flex flex-col">
      <div class="flex flex-col bg-white items-center">
        <div class="flex flex-row space-x-3">
          <h4 class="text-3xl font-bold text-gray-500 p-3">Home</h4>

        </div>
        <p class="text-gray-400 p-1">4 de Abril del 2022 </p>
      </div>
      <div class="min-h-screen bg-blue-100">
        <!-- Aqui Se acomdan todas las grid -->
        <div class="mt-8  grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10">
          <!-- Aqui Comienzan las GRID -->
          <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
            <div>
              <div class="text-sm text-gray-400 ">Pedidos el dia de hoy</div>
              <div class="flex items-center pt-1">
                <div class="text-3xl font-medium text-gray-600 ">34</div>
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
            <div>
              <div class="text-sm text-gray-400 ">Pedidos de ayer </div>
              <div class="flex items-center pt-1">
                <div class="text-3xl font-medium text-gray-600 ">44</div>
              </div>
            </div>
            <div class="text-pink-500">

            </div>
          </div>

          <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
            <div>
              <div class="text-sm text-gray-400 ">Total de pedidos</div>
              <div class="flex items-center pt-1">
                <div class="text-3xl font-medium text-gray-600 ">1000</div>
              </div>
            </div>
            <div class="text-pink-500">

            </div>
          </div>
          <!--Aqui terminan las Grid -->
        </div>

        <div class=" mt-5 grid  lg:grid-cols-3  md:grid-cols-3 p-4 gap-3">

          <div class="col-span-2 flex flex-col p-8 bg-white rounded shadow-sm">
            <b class="flex flex-row text-gray-500">Property Release for today</b>
            <canvas class="p-5" id="chartLine"></canvas>
          </div>

          <div class=" flex flex-col   p-5 bg-white rounded shadow-sm">
            <b class="flex flex-row text-gray-500">Occupancy Percentage</b>
            <canvas class="p-5" id="chartRadar"></canvas>
          </div>



        </div>
        <!--Table-->
        <div class="p-4 font-bold text-gray-600">Clients</div>
        <div class="grid  lg:grid-cols-1  md:grid-cols-1 p-4 gap-3">
          <div class="col-span-2 flex flex-auto items-center justify-between  p-5 bg-white rounded shadow-sm">
            <table class="min-w-full divide-y divide-gray-200 table-auto">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Title
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Status
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Role
                  </th>
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          Jane Cooper
                        </div>
                        <div class="text-sm text-gray-500">
                          jane.cooper@example.com
                        </div>
                      </div>
                    </div>
                  </td>

                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      Active
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    Admin
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          Jane Cooper
                        </div>
                        <div class="text-sm text-gray-500">
                          jane.cooper@example.com
                        </div>
                      </div>
                    </div>
                  </td>

                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      Active
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    Admin
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  </td>
                </tr>

                <!-- More people... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Required chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Chart line -->
  <script>
    const labels = ["January", "February", "March", "April", "May", "June"];
    const data = {
      labels: labels,
      datasets: [{
        label: "My First dataset",
        backgroundColor: "hsl(252, 82.9%, 67.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        data: [0, 10, 5, 2, 20, 30, 45],
      }, ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine = new Chart(
      document.getElementById("chartLine"),
      configLineChart
    );
  </script>

  <script>
    const dataRadar = {
      labels: [
        "Reservation 1",
        "Reservation 2",
        "Reservation 3",
        "Reservation 4",
        "Reservation 5",
        "Reservation 6",
        "Reservation 7",
      ],
      datasets: [{
          label: "My First Dataset",
          data: [65, 59, 90, 81, 56, 55, 40],
          fill: true,
          backgroundColor: "rgba(255,105,180)",
          borderColor: "rgb(255,20,147)",
          pointBackgroundColor: "rgb(133, 105, 241)",
          pointBorderColor: "#fff",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgb(133, 105, 241)",
        },
        {
          label: "My Second Dataset",
          data: [28, 48, 40, 19, 96, 27, 100],
          fill: true,
          backgroundColor: "rgba(255,105,180)",
          borderColor: "rgb(0,191,255)",
          pointBackgroundColor: "rgb(54, 162, 235)",
          pointBorderColor: "#fff",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgb(54, 162, 235)",
        },
      ],
    };

    const configRadarChart = {
      type: "radar",
      data: dataRadar,
      options: {},
    };

    var chartBar = new Chart(
      document.getElementById("chartRadar"),
      configRadarChart
    );
  </script>
  </div>

  </div>
  </div>
</body>

</html>