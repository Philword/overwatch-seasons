                <h2>Team Information</h2>
                <div class="uk-margin-medium-top">
                    <form method="POST" action="/teams" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="uk-margin">
                            <div class="form-legend">Team name</div>
                            <input class="uk-input" type="text" value="{{ old('name') }}" name="name" placeholder="Enter your team name">
                        </div>
                        <div class="uk-margin">
                            <div class="form-legend">Country</div>
                            <select class="uk-select " name="country_id" placeholder="Enter your team name">
                                <option>Choose your country</option>
                                @foreach(App\Country::all()->sortBy('name') as $country)
                                <option value="{{ $country->id}}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="uk-margin">
                            <div class="form-legend">Contact e-mail</div>
                            <input class="uk-input " type="text" value="{{ old('email') }}" name="email" placeholder="Team or team captain email">
                        </div>
                        <div class="uk-margin">
                            <div class="form-legend">Skype id</div>
                            <input class="uk-input " type="text" value="{{ old('skype') }}" name="skype" placeholder="Team captain skype">
                        </div>
                        <div class="uk-margin">
                            <div class="form-legend">Team logo</div>
                            <div class="uk-flex uk-grid">
                            <div class="uk-width-1-3@s">
                                <div uk-form-custom="target: true">
                                    <input type="file" name="logo">
                                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file">
                                </div>
                            </div>
                            <div class="uk-width-2-3@s">
                                <div class="form-quize">(Format: PNG without background. Minimum width: 200px. Make sure your file has minimum space between border and logo. Check out <a href="https://d1u5p3l4wpay3k.cloudfront.net/lolesports_gamepedia_en/e/e9/ManaLight.png" target="_blank">good example</a>)</div>
                            </div>
                        </div>
                        </div>
                              @if( count($errors) )
                        <ul class="uk-alert uk-alert-danger">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                        <div class="uk-margin uk-margin-medium-top">
                            <button type="submit" class="uk-button uk-button-primary uk-float-right">Next</button>
                        </div>
                    </form>
                </div>
            </div>
