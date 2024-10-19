<x-layout>
    <x-slot:heading>Job listing page</x-slot:heading>
   <ul>
       @foreach($jobs as $job)
           <li>
               <a href="/jobs/{{ $job['id'] }}" class="text-blue-600 hover:underline">
                   <strong>{{ $job['title'] }}</strong>: Salary ${{ $job['salary'] }} per year.
               </a>
           </li>
       @endforeach
   </ul>
</x-layout>
