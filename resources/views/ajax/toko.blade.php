				<h4 class="card-title">Informasi Toko</h4>
				<div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Latitude</th>
						<th>Longitude</th>
						<th>Accuracy</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
						<td id="latitude-toko">{{ $toko->latitude }}</td>
						<td id="longitude-toko">{{ $toko->longitude }}</td>
						<td id="accuracy-toko">{{ $toko->accuracy }}</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Latitude</th>
						<th>Longitude</th>
						<th>Accuracy</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>