<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-bold text-3xl">Works</h1>
                    <p class="text-slate-400">view and maange your works</p>

                    <div>
                        <ul class="menu menu-vertical lg:menu-horizontal rounded-box font-semibold text-slate-500">
                            <li><a>Running</a></li>
                            <li><a>Succeeded</a></li>
                            <li><a>Cancled</a></li>
                            <li><a>All</a></li>
                          </ul>
                    </div>

                    <div class="overflow-x-auto border-2 rounded-xl">
                        <table class="table">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Progress</th>
                              <th>Created At</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- row 1 -->
                            <tr>
                              <th>1</th>
                              <td>Cy Ganderton</td>
                              <td>Quality Control Specialist</td>
                              <td><progress class="progress w-56"></progress></td>
                              <td>Blue</td>
                              <td><button class="btn btn-error text-white">Delete</button></td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                              <th>2</th>
                              <td>Hart Hagerty</td>
                              <td>Desktop Support Technician</td>
                              <td><progress class="progress w-56"></progress></td>
                              <td>Purple</td>
                              <td><button class="btn btn-error text-white">Delete</button></td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                              <th>3</th>
                              <td>Brice Swyre</td>
                              <td>Tax Accountant</td>
                              <td><progress class="progress w-56"></progress></td>
                              <td>Red</td>
                              <td><button class="btn btn-error text-white">Delete</button></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
