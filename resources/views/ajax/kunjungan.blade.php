				<h4 class="card-title">Informasi Titik Kunjunagn</h4>
				<div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
						<th>Status</th>
                                                <th>Latitude</th>
						<th>Longitude</th>
						<th>Accuracy</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
						<td>{{ $status }}</td>
						<td>{{ $latitude }}</td>
						<td>{{ $longitude }}</td>
						<td>{{ $accuracy }}</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
						<th>Status</th>
                                                <th>Latitude</th>
						<th>Longitude</th>
						<th>Accuracy</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>