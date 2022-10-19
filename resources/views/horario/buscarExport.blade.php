<meta charset="UTF-8"> 
                    Horario
                Carga académica

                    <table>
                        <thead>
                                    <tr>
										<th>Materias</th>
										<th>Grupo</th>
										<th>Horas semanales</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                @if(is_null(@$horarios))
                                
                                @else 
                                    @foreach ($horarios as $horario)
                                    <tr> 
											<td >{{ $horario->nombre_completo_materia }}</td>
											<td >{{ $horario->grupo }}</td>
											<td >{{ $horario->Horas }}</td>
                                        </tr>
                                    @endforeach
                                    @endif 
                                </tbody>
                            </table>

                            
                            Actividades de apoyo a la docencia
                            <table>
                        <thead>
                                    <tr>
										<th>Actividad</th>
										<th>Horas semanales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(is_null(@$horariosact))
                                        
                                @else 
                                    @foreach ($horariosact as $horario)
                                        <tr>
											<td >{{ $horario->descripcion_actividad }}</td>
											<td >{{ $horario->Horas }}</td>

                                            <td>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif            
                                </tbody>
                            </table>


                            Actividades administrativas
                            <table>
                        <thead>
                                    <tr>
										<th>Actividad</th>
										<th>Horas semanales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(is_null(@$horariosad))
                                        
                                @else 
                                    @foreach ($horariosad as $horario)
                                        <tr>
											<td >{{ $horario->dia_semana }}</td>
											<td >{{ $horario->Horas }}</td>

                                            <td>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif            
                                </tbody>
                            </table>