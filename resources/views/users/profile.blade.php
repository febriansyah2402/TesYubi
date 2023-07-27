<x-app-layout :assets="$assets ?? []">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="d-flex flex-wrap align-items-center justify-content-between">
                  <div class="d-flex flex-wrap align-items-center">
                     <div class="profile-img position-relative me-3 mb-3 mb-lg-0">
                        <img src="{{ $profileImage ?? asset('images/avatars/01.png')}}" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100">
                        <img src="{{asset('images/avatars/avtar_1.png')}}" alt="User-Profile" class="theme-color-purple-img img-fluid rounded-pill avatar-100">
                        <img src="{{asset('images/avatars/avtar_2.png')}}" alt="User-Profile" class="theme-color-blue-img img-fluid rounded-pill avatar-100">
                        <img src="{{asset('images/avatars/avtar_4.png')}}" alt="User-Profile" class="theme-color-green-img img-fluid rounded-pill avatar-100">
                        <img src="{{asset('images/avatars/avtar_5.png')}}" alt="User-Profile" class="theme-color-yellow-img img-fluid rounded-pill avatar-100">
                        <img src="{{asset('images/avatars/avtar_3.png')}}" alt="User-Profile" class="theme-color-pink-img img-fluid rounded-pill avatar-100">
                     </div>
                     <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                        <h4 class="me-2 h4">{{ $data->full_name ?? 'Austin Robertson'  }}</h4>
                        <span class="text-capitalize"> - {{ str_replace('_',' ',auth()->user()->user_type) ?? 'Marketing Administrator' }}</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-12">
         <div class="">
            <div class="card">
               <div class="card-header">
                  <div class="header-title">
                     <h4 class="card-title">Profile</h4>
                  </div>
               </div>
               <div class="card-body">
                  <div class="text-center">
                     <div class="user-profile">
                     <img src="{{ $profileImage ?? asset('images/avatars/01.png')}}" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100">
                     </div>
                     <div class="mt-3">
                        <h3 class="d-inline-block">{{ $data->full_name ?? 'Austin Robertson'  }}</h3>
                        <p class="d-inline-block pl-3"> - {{ $data->userProfile['company_name']}}</p>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <div class="header-title">
                     <h4 class="card-title">About User</h4>
                  </div>
               </div>
               <div class="card-body">
               <div class="mt-2">
                  <h6 class="mb-1">Alamat:</h6>
                  <p>{{$data->userProfile['street_addr_1']}}</p>
                  </div>
                  <div class="mt-2">
                  <h6 class="mb-1">Joined:</h6>
                  <p>{{$data->userProfile['created_at']}}</p>
                  </div>
                  <div class="mt-2">
                  <h6 class="mb-1">Lives:</h6>
                  <p>{{$data->userProfile['country']}} -  {{$data->userProfile['city']}}</p>
                  </div>
                  <div class="mt-2">
                  <h6 class="mb-1">Email:</h6>
                  <p><a href="#" class="text-body"> {{$data['email']}}</a></p>
                  </div>
                  <div class="mt-2">
                  <h6 class="mb-1">Linkedin:</h6>
                  <p><a href="#" class="text-body" target="_blank"> {{$data->userProfile['linkdin_url']}}</a></p>
                  </div>
                  <div class="mt-2">
                  <h6 class="mb-1">Contact:</h6>
                  <p><a href="#" class="text-body">{{$data->userProfile['phone_number']}}</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   @include('partials.components.share-offcanvas')
</x-app-layout>
