						    <option value="">District</option>
						    @foreach ($kecamatans as $kecamatan)
                                                    <option value="{{ $kecamatan->dis_id}}">{{ $kecamatan->dis_name}}</option>
						    @endforeach