<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full text-center">
                        <thead>
                            <tr>
                                <td class="border-solid border-3 px-2 py-1 bg-slate-100">Employee Number</td>
                                <td class="border-solid border-3 px-2 py-1 bg-slate-100">First Name</td>
                                <td class="border-solid border-3 px-2 py-1 bg-slate-100">Last Name</td>
                                <td class="border-solid border-3 px-2 py-1 bg-slate-100">Extension</td>
                                <td class="border-solid border-3 px-2 py-1 bg-slate-100">Email</td>
                                <td class="border-solid border-3 px-2 py-1 bg-slate-100">Office Code</td>
                                <td class="border-solid border-3 px-2 py-1 bg-slate-100">Reports To</td>
                                <td class="border-solid border-3 px-2 py-1 bg-slate-100">Job Title</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employeeData as $employee)
                                <tr>
                                    <td class="border-solid border-2 p-2">{{ $employee['employeeNumber'] }}</td>
                                    <td class="border-solid border-2 p-2">{{ $employee['firstName'] }}</td>
                                    <td class="border-solid border-2 p-2">{{ $employee['lastName'] }}</td>
                                    <td class="border-solid border-2 p-2">{{ $employee['extension'] }}</td>
                                    <td class="border-solid border-2 p-2">{{ $employee['email'] }}</td>
                                    <td class="border-solid border-2 p-2">{{ $employee['officeCode'] }}</td>
                                    <td class="border-solid border-2 p-2">{{ $employee['reportsTo'] }}</td>
                                    <td class="border-solid border-2 p-2">{{ $employee['jobTitle'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
