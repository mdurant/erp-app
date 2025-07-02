<!-- resources/views/roles/index.blade.php -->
@extends('layouts.app')

@section('header', __('Gestión de Roles'))

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @livewire('role-list')
                </div>
            </div>
        </div>
    </div>
@endsection
