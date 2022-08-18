<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Users page!
                    <div class="row">

                    <div class="flex-container">
                      <div class="columns m-t-10">
                        <div class="column">
                          <h1 class="title">Edit User</h1>
                        </div>
                      </div>
                      <hr class="m-t-0">

                      <div class="columns">
                        <div class="column">
                          <form action="{{route('users.update', $user->id)}}" method="POST">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <div class="field">
                              <label for="name" class="label">Name:</label>
                              <p class="control">
                                <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
                              </p>
                            </div>

                            <div class="field">
                              <label for="email" class="label">Email:</label>
                              <p class="control">
                                <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
                              </p>
                            </div>

                            <div class="field">
                              <label for="password" class="label">Password</label>
                              <b-radio-group v-model="password_options">
                                <div class="field">
                                  <input type="radio" name="password_options" value="keep">Do Not Change Password</b-radio>
                                </div>
                                <div class="field">
                                  <input type="radio" name="password_options" value="manual">Manually Set New Password</b-radio>
                                  <p class="control">
                                    <input type="text" class="input" name="password" id="password" placeholder="Manually give a password to this user">
                                  </p>
                                </div>
                              </b-radio-group>
                            </div>

                            <button class="button is-primary">Edit User</button>
                          </form>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
