						    <option value="">City</option>
						    @foreach ($kotas as $kota)
                                                    <option value="{{ $kota->city_id}}">{{ $kota->city_name}}</option>
						    @endforeach