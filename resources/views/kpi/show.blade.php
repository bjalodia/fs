<x-app-layout>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-5 bg-white border-b border-gray-200">
                    <div">

                    Hotel: {{$kpi->hotel->name}}
                    <table>  
                        <th>year</th>
                        <th>q</th>
                        <th>cat</th>
                        <th>p</th>
                        <th>amount</th>
                        <th>status</th>
                    @foreach ($kpi_details as $kpi_detail)
                    <tr>
                    <td>{{$kpi_detail->fiscalYear->fiscal_year}}</td>
                    <td>{{$kpi_detail->quarter->quarter}}</td>
                    <td>{{$kpi_detail->categorie->categorie_name}}</td>
                    <td>{{$kpi_detail->project->project_name}}</td>
                    <td>{{$kpi_detail->amount}}</td>
                    <td>{{$kpi_detail->status}}</td>
                    <tr>
                    @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
