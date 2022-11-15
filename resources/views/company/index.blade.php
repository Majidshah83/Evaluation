@extends('layouts.master')
@section('content')
 <div class="overflow-x-auto">
 @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
     <table class="table mt-12">

         <thead class="table-light">
             <tr>

                 <th class="whitespace-nowrap">Company Name</th>
                 <th class="whitespace-nowrap">Status</th>
                 <th class="whitespace-nowrap">CRO</th>
                  <th class="whitespace-nowrap">Registration Date</th>

             </tr>
         </thead>
         <tbody>


@foreach($company as $companies)

             <tr>
                <td>{{$companies->name}}</td>
                <td>{{$companies->status}}</td>
                <td>{{$companies->cro}}</td>
                <td>{{$companies->reg_date}}</td>
</td>


             </tr>

          @endforeach
         </tbody>
     </table>

 </div>

 </div>



@endsection
