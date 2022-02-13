@extends('layouts.app')

@section('content')


<div class="container">
    <section class="mt-50 mb-50 container_750">


        <div class="ds-card-form-ct  mb-50">
            <div class="ds-card-form__header">
                <h3 class="ds-card-form__title">Mon profile</h3>
            </div>
            <div class="ds-card-form__body">

                <div class="profile__info">
                    

                    <p><span class="label">Prénom : </span><span class="value">{{ old('firstname') ?? auth()->user()->firstname }}</span></p>
                    <p><span class="label">Nom : </span><span class="value">{{ old('name') ?? auth()->user()->name }}</span></p>
                    <p><span class="label">Adresse Email: </span><span class="value">{{ old('email') ?? auth()->user()->email }}</span></p>
                    <p><span class="label">Téléphone : </span><span class="value">{{ old('phone') ?? auth()->user()->phone }}</span></p>
                </div> 
                <div class="mt-30">
                    {{-- <a class="btn btn-green-solid  btn-icon-left btn-icon-edit btn-medium" href="#">Mettre à jour</a> --}}


                     <!-- MODAL MODIF PROFILE -->

                                <div x-data="{ open: false }" class="ds-modal-wrapper">
                                    
                                    <button x-on:click="open = true" 
                                            type="button" 
                                            class="btn btn-green-solid  btn-icon-left btn-icon-edit btn-medium">
                                            Mettre à jour
                                    </button>
                                
                                  
                                    <div
                                        x-show="open"
                                        x-on:keydown.escape.prevent.stop="open = false"
                                        role="dialog"
                                        aria-modal="true"
                                        x-id="['modal-title']"
                                        :aria-labelledby="$id('modal-title')"
                                        class="ds-modal"
                                    >
                                       
                                        <div x-show="open" x-transition.opacity class="ds-modal-overlay"></div>
                                
                                       
                                        <div
                                            x-show="open" x-transition
                                            x-on:click="open = false"
                                            class="ds-modal-panel"
                                        >
                                            <div
                                                x-on:click.stop
                                                x-trap.noscroll.inert="open"
                                                class="ds-modal-content ds-modal-small"
                                            >

                                            <form method="POST" action="{{ route('user-profile-information.update') }}">
                                                @csrf
                                                @method('PUT')
                                               
                                                <h2 class="ds-modal-header" :id="$id('modal-title')">Mettre à jour le profile</h2>
                                
                                             
                                                <div class="ds-modal-body">
                                                    {{-- <p class="mb-30">Etes-vous sûr de vouloir modifier vos informations de profile ?</p> --}}
                                                       
                                                    <div class="ds-form">
                                                        <div class="input_gpr">

                                                            <label for="name">{{ __('Name') }}</label>

                                                            <input id="name" type="text" class=" @error('name') input-error @enderror" 
                                                            name="name" value="{{ old('name') ?? auth()->user()->name }}" 
                                                            required autocomplete="name" autofocus>

                                                            @error('name')
                                                                <span class="error-message" role="alert">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="input_gpr">

                                                            <label for="firstname">Prénom</label>

                                                            <input id="firstname" type="text" class=" @error('firstname') input-error @enderror" 
                                                            name="firstname" value="{{ old('firstname') ?? auth()->user()->firstname }}" 
                                                            required autocomplete="firstname" autofocus>

                                                            @error('firstname')
                                                                <span class="error-message" role="alert">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="input_gpr">
                                                            <label for="email" >{{ __('E-Mail Address') }}</label>
                            
                                                            <input id="email" type="email" class=" @error('email') input-error @enderror" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autocomplete="email" autofocus>
                            
                                                            @error('email')
                                                                <span class="error-message" role="alert">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                            
                                                        </div>

                                                        <div class="input_gpr">

                                                            <label for="phone">Téléphone</label>

                                                            <input id="phone" type="text" class=" @error('phone') input-error @enderror" 
                                                            name="phone" value="{{ old('phone') ?? auth()->user()->phone }}" 
                                                            required autocomplete="phone" autofocus>

                                                            @error('phone')
                                                                <span class="error-message" role="alert">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                
                                            
                                              
                                                <div class="ds-modal-footer">
                                                    {{-- <button type="submit" class="">
                                                       
                                                    </button> --}}
                                                    <button type="submit" x-on:click="open = false" class="btn btn-green-outline  btn-medium">
                                                        {{-- {{ __('Update Profile') }} --}}
                                                        Modifier
                                                    </button>
                                                    <button type="button" x-on:click="open = false" class="btn btn-red-outline  btn-medium">
                                                        Annuler
                                                    </button>
                                                </div>

                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <!-- END MODAL MODIF PROFILE -->

                </div>
              
    
            
    
            </div>
            <!-- <div class="ds-card-form__footer">
    
            </div> -->
        </div>


        <div class="ds-card-form-ct  mb-50">
            <div class="ds-card-form__header">
                <h3 class="ds-card-form__title">Mes favoris</h3>
            </div>
            <div class="ds-card-form__body">

                <div class="ds-card-h">
                    <div class="ds-card-row">
                        <img src="/assets/images/khassida_cover04.png" alt="">
                    </div>
                    <div class="ds-card-row ds-card-info">
                        <h3>Nourou Daarayni</h3>
                        <p>Cheikhoul Khadim</p>
                    </div>
                    <!-- <div class="ds-card-row">
            
                    </div> -->
                    <div class="ds-card-row ds-card-actions">
                       
                        <a class="btn btn-grey-solid  btn-icon-left btn-icon-search btn-xtra-small" href="#">Consulter</a>
                        <button class="btn btn-green-outline btn-icon-left btn-icon-heart-empty btn-xtra-small"> 
                            <!-- <em class="fontello icon-heart-empty" aria-hidden="true"></em> -->
                            Favoris
                        </button>
                    </div>
                </div>
            
            
                <div class="ds-card-h">
                    <div class="ds-card-row">
                        <img src="/assets/images/khassida_cover02.png" alt="">
                    </div>
                    <div class="ds-card-row ds-card-info">
                        <h3>Nourou Daarayni</h3>
                        <p>Cheikhoul Khadim</p>
                    </div>
                    <!-- <div class="ds-card-row">
            
                    </div> -->
                    <div class="ds-card-row ds-card-actions">
                        
                        <a class="btn btn-grey-solid  btn-icon-left btn-icon-search btn-xtra-small" href="#">Consulter</a>
                        <button class="btn btn-green-outline btn-icon-left btn-icon-heart-empty btn-xtra-small"> 
                            <!-- <em class="fontello icon-heart-empty" aria-hidden="true"></em> -->
                            Favoris
                        </button>
                    </div>
                </div>  
                
                <div class="ds-card-h">
                    <div class="ds-card-row">
                        <img src="/assets/images/khassida_cover04.png" alt="">
                    </div>
                    <div class="ds-card-row ds-card-info">
                        <h3>Nourou Daarayni</h3>
                        <p>Cheikhoul Khadim</p>
                    </div>
                    <!-- <div class="ds-card-row">
            
                    </div> -->
                    <div class="ds-card-row ds-card-actions">
                       
                        <a class="btn btn-grey-solid  btn-icon-left btn-icon-search btn-xtra-small" href="#">Consulter</a>
                        <button class="btn btn-green-outline btn-icon-left btn-icon-heart-empty btn-xtra-small"> 
                            <!-- <em class="fontello icon-heart-empty" aria-hidden="true"></em> -->
                            Favoris
                        </button>
                    </div>
                </div>
            
            
                <div class="ds-card-h">
                    <div class="ds-card-row">
                        <img src="/assets/images/khassida_cover02.png" alt="">
                    </div>
                    <div class="ds-card-row ds-card-info">
                        <h3>Nourou Daarayni</h3>
                        <p>Cheikhoul Khadim</p>
                    </div>
                    <!-- <div class="ds-card-row">
            
                    </div> -->
                    <div class="ds-card-row ds-card-actions">
                        
                        <a class="btn btn-grey-solid  btn-icon-left btn-icon-search btn-xtra-small" href="#">Consulter</a>
                        <button class="btn btn-green-outline btn-icon-left btn-icon-heart-empty btn-xtra-small"> 
                            <!-- <em class="fontello icon-heart-empty" aria-hidden="true"></em> -->
                            Favoris
                        </button>
                    </div>
                </div> 
              
    
            
    
            </div>
          
        </div>

    </section>

</div>

@endsection
