<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto border-2 rounded-xl">
        <table class="table">
            <!-- head -->
            <thead class="text-center">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Progress</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @if ($success->isEmpty())
                <tr>
                    <td colspan="6" class="text-center p-4 text-slate-400">
                        No Data
                    </td>
                </tr>
            @else
                @foreach ($success as $key => $item)
                <tr>
                    <th>{{$key + 1}}</th>
                    <td>{{$item->title}}</td>
                    <td class="text-success">{{$item->status->name}}</td>
                    <td>
                        <progress class="progress w-28" value="{{$item->progress}}" max="100"></progress>
                        <span class="ml-2">{{ $item->progress }}%</span>
                    </td>
                    <td>{{ $item->created_at->format('Y-m-d') }}</td>

                    <td>
                        <div class="flex justify-center space-x-3">
                        <a href="{{ route('edit', $item->id) }}" class="btn btn-warning text-white">Edit</a>
                        <form action="{{route('destroy', $item->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-error text-white">Delete</button>
                        </form>
                    </td>
                </div>
                </tr>
                    
                @endforeach

                @endif
              
            </tbody>
        </table>
    </div>

    </div>

</x-app-layout>
