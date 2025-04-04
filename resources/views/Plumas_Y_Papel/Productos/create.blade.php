@extends('layouts.Plumas_Y_Papel.plantilla')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-sm-10 col-sm-offset-1">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="rose" id="Producto">
                    <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="wizard-header">
                            <h3 class="wizard-title">
                                Nuevo Producto
                            </h3>
                            <h5>Ingresa la información del prouducto</h5>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li>
                                    <a href="#about" data-toggle="tab">General</a>
                                </li>
                                <li>
                                    <a href="#account" data-toggle="tab">Detallada</a>
                                </li>
                                <li>
                                    <a href="#address" data-toggle="tab">Politicas</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                                <div class="row">
                                    <h4 class="info-text">Información general del producto</h4>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../assets/img/image_placeholder.jpg" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Portada</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="img_1" accept="image/*">
                                                    </span>
                                                    @error('url1')
                                                    <br>
                                                    <small style="color: red">{{$message}}</small>
                                                    @enderror
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Vendedor
                                                    <small>(Obligatorio)</small>
                                                </label>
                                                <select name="t100_seller" class="form-control">
                                                    @foreach ($vendedor as $key => $items)
                                                    <option value="{{$items->id}}">{{$items->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Precio
                                                    <small>(Oblgatorio)</small>
                                                </label>
                                                <input name="t100_price_product" type="number" id="t100_price_product" class="form-control" value="{{old('t100_price_product')}}">
                                                @error('t100_price_product')
                                                <br>
                                                <small style="color: red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">label</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Codigo
                                                    <small>(Oblgatorio)</small>
                                                </label>
                                                <input name="t100_cod_product" type="text" id="t100_cod_product" class="form-control" value="{{old('t100_cod_product')}}">
                                                @error('t100_cod_product')
                                                <br>
                                                <small style="color: red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">category</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Categoria
                                                    <small>(Obligatorio)</small>
                                                </label>
                                                <select name="t090_product_category" id="t090_product_category" class="form-control" value="{{old('t090_product_category')}}">
                                                    @foreach ($categorias as $key => $items)
                                                    <option value="{{$items->t090_rowid}}">{{$items->t090_category_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('categoria')
                                                <br>
                                                <small style="color: red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> Información detallada del producto </h4>
                                <div class="row">
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre del producto
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input type="text" name="t100_name_product" id="t100_name_product" class="form-control" value="{{old('t100_name_product')}}">
                                            @error('t100_name_product')
                                            <br>
                                            <small style="color: red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Stock
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input type="text" name="t100_stock_product" id="t100_stock_product" class="form-control" value="{{old('t100_stock_product')}}">
                                            @error('t100_stock_product')
                                            <br>
                                            <small style="color: red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Disponibilidad
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <select name="t100_status_product" class="form-control" value="{{old('t100_status_product')}}">
                                                <option value="1">Listado</option>
                                                <option value="0">No Listado</option>
                                            </select>
                                            @error('t100_status_product')
                                            <br>
                                            <small style="color: red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-sm-offset-1" style="height: 30px">
                                    </div>
                                    <div class="col-sm-9 col-sm-offset-1" style="height: 50px">
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../assets/img/image_placeholder.jpg" alt="..." style="float: left">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Foto 1</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="img_2" value="" accept="image/*">
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../assets/img/image_placeholder.jpg" alt="..." style="float: left">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Foto 2</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="img_3" value="" accept="image/*">
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../assets/img/image_placeholder.jpg" alt="..." style="float: left">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Foto 3</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="img_4"  value="" accept="image/*">
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../assets/img/image_placeholder.jpg" alt="..." style="float: left">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Foto 4</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="img_5" value="" accept="image/*">
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Descripcion
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <textarea class="form-control"  name="t100_desc_product" id="t100_desc_product"  rows="4" value="{{old('t100_desc_product')}}"></textarea>
                                            @error('t100_desc_product')
                                            <br>
                                            <small style="color: red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text">POLÍTICAS DE PUBLICACIÓN</h4>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <small><b>POLÍTICAS DE PUBLICACIÓN EN PLUMAS Y PAPEL</b></small>
                                        <label class="control-label">
                                            <p style="text-align: justify">
                                                Antes de publicar un producto en "Plumas y Papel", el administrador debe asegurarse de cumplir con las siguientes políticas de publicación:
                                                <br><br>
                                                1. Todo producto publicado debe contar con la información mínima obligatoria: nombre del producto, imágenes claras y representativas, precio actualizado y una descripción detallada de sus características.
                                                <br>
                                                2. "Plumas y Papel" es responsable de la información publicada en la plataforma. Por ello, es fundamental verificar que los datos sean precisos y reflejen correctamente el producto que se ofrece.
                                                <br>
                                                3. No está permitido publicar productos que no pertenezcan a la categoría de papelería o artículos relacionados con la temática de la tienda.
                                                <br>
                                                4. Las imágenes deben ser de buena calidad y representar fielmente el producto. No se permiten imágenes genéricas o que puedan inducir a error al comprador.
                                                <br>
                                                5. Cualquier actualización en la disponibilidad, precio o características del producto debe ser realizada oportunamente para evitar inconvenientes con los clientes.
                                                <br>
                                                6. En caso de detectar errores en una publicación, esta debe ser corregida de inmediato para garantizar una experiencia de compra transparente y confiable.
                                            </p>
                                        </label>
                                        <br>
                                        <input type="checkbox" name="t100_publishing_policies" id="t100_publishing_policies" required> Aceptar
                                        @error('t100_publishing_policies')
                                        <br>
                                        <small style="color: red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <a href="{{route('productos.index')}}" class="button">
                                    <input  type='button' class='btn btn-fill btn-danger btn-wd' value="CANCELAR"/>
                                </a>
                                <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Siguiente' />
                                <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' value="Guardar"/>
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Atras' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- wizard container -->
        </div>
    </div>
</div>
@endsection
