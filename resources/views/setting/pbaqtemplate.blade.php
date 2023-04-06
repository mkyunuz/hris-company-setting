@extends('layouts.app')

@section('content')
<div class="container" id="resources" data-team-url="{{route('teams')}}">
    <div class="row">
        <div class="col-md-3">
            <div class="d-flex flex-column" id="team-approver">
                <!-- <div class="card mb-1">
                    <div class="card-body">
                        <div class="d-flex align-items-center contact">
                            <div class="avatar"></div>
                            <div class="ms-3 contact-info">
                                <p class="my-0">Johan Dani</p>
                                <p class="my-0 text-small">Finance</p>
                                <p class="my-0 text-small">50 User</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-1">
                    <div class="card-body">
                        <div class="d-flex align-items-center contact">
                            <div class="avatar"></div>
                            <div class="ms-3 contact-info">
                                <p class="my-0">Nuke Yuve</p>
                                <p class="my-0 text-small">Creative - Jakarta</p>
                                <p class="my-0 text-small">50 User</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-1">
                    <div class="card-body">
                        <div class="d-flex align-items-center contact">
                            <div class="avatar"></div>
                            <div class="ms-3 contact-info">
                                <p class="my-0">Oca Sakti P</p>
                                <p class="my-0 text-small">Creative</p>
                                <p class="my-0 text-small">50 User</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-1">
                    <div class="card-body">
                        <div class="d-flex align-items-center contact">
                            <div class="avatar"></div>
                            <div class="ms-3 contact-info">
                                <p class="my-0">Ika Pratiwi</p>
                                <p class="my-0 text-small">Marketing</p>
                                <p class="my-0 text-small">50 User</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-1">
                    <div class="card-body">
                        <div class="d-flex align-items-center contact">
                            <div class="avatar"></div>
                            <div class="ms-3 contact-info">
                                <p class="my-0">Iqbal Rais</p>
                                <p class="my-0 text-small">Operational</p>
                                <p class="my-0 text-small">50 User</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class='form-floating-static'>
                        <input type='text' name='seach' class='form-control mb-2' id="globalSearch" placeholder='Masukkan nama / Team Group'/>
                        <label for="floatingGlobalUserSearch">Pencarian</label>
                    </div>
                </div>
                <div class="col-md-6" id="member-teams">
                    
                    <!-- <div class="card card-gray">
                        <div class="card-body">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item accordion-item-table">
                                    <h2 class="accordion-header">

                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <table class="table api-table border-table-gray">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"><input type="checkbox" name="chekalluser" class="chekalluser" /></th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Team</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="checkbox" name="user_check[]" value="user-1-0"/>
                                                        </td>
                                                        <td data-clickable="true">Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="checkbox" name="user_check[]" value="user-1-1"/>
                                                        </td>
                                                        <td data-clickable="true">Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" value="user-1-2"/></td>
                                                        <td data-clickable="true" colspan="2">Larry the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-gray">
                        <div class="card-body">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item accordion-item-table">
                                    <h2 class="accordion-header" >
                                        
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <table class="table api-table border-table-gray">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"><input type="checkbox" name="chekalluser" class="chekalluser" /></th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Team</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="checkbox" name="user_check[]"  value="user-2-1"/>
                                                        </td>
                                                        <td data-clickable="true">Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" value="user-2-2"/></td>
                                                        <td data-clickable="true">Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" value="user-2-3"/></td>
                                                        <td data-clickable="true" colspan="2">Larry the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-gray">
                        <div class="card-body">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                
                                <div class="accordion-item accordion-item-table">
                                    <h2 class="accordion-header" >
                                        
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <table class="table api-table border-table-gray">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"><input type="checkbox" name="chekalluser" class="chekalluser" /></th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Team</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="checkbox" name="user_check[]"  value="user-2-1"/>
                                                        </td>
                                                        <td data-clickable="true">Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" value="user-2-2"/></td>
                                                        <td data-clickable="true">Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" value="user-2-3"/></td>
                                                        <td data-clickable="true" colspan="2">Larry the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-table">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                            <table class="table api-table border-table-gray">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"><input type="checkbox" name="chekalluser" class="chekalluser" /></th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Team</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="checkbox" name="user_check[]" value="user-3-1"/>
                                                        </td>
                                                        <td data-clickable="true">Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" value="user-3-2"/></td>
                                                        <td data-clickable="true">Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" value="user-3-3"/></td>
                                                        <td data-clickable="true" colspan="2">Larry the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="col-md-6">
                    <div class="card card-gray">
                        <div class="card-body">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item accordion-item-table">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <table class="table api-table border-table-gray">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"><input type="checkbox" name="chekalluser" class="chekalluser" /></th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Team</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="checkbox" name="user_check[]" />
                                                        </td>
                                                        <td data-clickable="true">Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" /></td>
                                                        <td data-clickable="true">Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" /></td>
                                                        <td data-clickable="true" colspan="2">Larry the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="checkbox" name="user_check[]" />
                                                        </td>
                                                        <td data-clickable="true">Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" /></td>
                                                        <td data-clickable="true">Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="checkbox" name="user_check[]" />
                                                        </td>
                                                        <td data-clickable="true">Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" /></td>
                                                        <td data-clickable="true">Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="checkbox" name="user_check[]" />
                                                        </td>
                                                        <td data-clickable="true">Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><input type="checkbox" name="user_check[]" /></td>
                                                        <td data-clickable="true">Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div> -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h3>Form</h3>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail3" class="col-sm-3 col-form-label">Plain text</label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">email@example.com</p>
                            <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail3" value="email@example.com"> -->
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Readonly</label>
                        <div class="col-sm-9">
                            <input type="password" readonly placeholder="enter your password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3 col-form-label control-label-desc">
                            <p>Textarea</p>
                            <p class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3 col-form-label control-label-desc">
                            <p>Default Checkbox</p>
                            <p class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3 col-form-label">
                            Default Checkbox With Subtitle
                        </div>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultSubtitle">
                                <label class="form-check-label" for="flexCheckDefaultSubtitle">
                                    Default checkbox
                                </label>
                                <p class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedSubtitle" checked>
                                <label class="form-check-label" for="flexCheckCheckedSubtitle">Checked checkbox</label>
                                <p class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3 col-form-label">
                            Default Checkbox With Subtitle
                        </div>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3 col-form-label">
                            Default Select
                        </div>
                        <div class="col-sm-9">
                            <select class="form-control select-default" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3 col-form-label">
                            Floating
                        </div>
                        <div class="col-sm-9">

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3 col-form-label">
                            Floating Select
                        </div>
                        <div class="col-sm-9">

                        </div>
                    </div>

                    <div class="bg-gray-100 clear-spacer-x clear-spacer-bottom card-spacer-xy text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Launch static backdrop modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Modal body text goes here.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Team</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>


</div>
<div class="modal fade" id="modalUserContact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUserContactLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-gray-100">
                <h5 class="modal-title">Move Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-2">
            <div class='form-floating-static' data-spy="affix">
                <input type='text' name='seach' class='form-control mb-2' placeholder='Masukkan nama / Team Group'/>
                <label for="floatingUserSearch">Pencarian</label>
            </div>
                <div id="team-approver-modal"></div>
            </div>
            <div class="modal-footer bg-gray-100">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $.fn.apitable = function(config = {}) {
        const {
            onClickable,
            checkBoxesIndex = 0,
            checkAllClass,
            ajax = false,
            moveToCallBack,
            globalSearchClass,

        } = config
        const $table = $(this);
        var selected = [];
        var $registeredTables = [];
        
        function listenForCheckAll($_table, dataId) {
            if (typeof checkAllClass != "undefined") {
                $checkAlEl = $table.find(checkAllClass)
                console.log($_table, $checkAlEl, checkAllClass)
                setCheckAllListener($_table, $checkAlEl, dataId)
                
            }
        }
        function listenForCheckAllIndividual($_table, dataId) {
            if (typeof checkAllClass != "undefined") {
                $checkAlEl = $_table.find(checkAllClass)
                console.log($_table, $checkAlEl, checkAllClass)
                setCheckAllListener($_table, $checkAlEl, dataId)
                
            }
        }

        function listenClickableCol($_table, index, dataId) {
            const tableDataId = $_table.attr("data-id")
            $_table.find("td[data-clickable='true'").addClass("pointer");
            $_table.off("click", "td[data-clickable='true']").on("click", "td[data-clickable='true']", function(e) {
                const $tr = $(this).parent();
                const $checkbox = $tr.find("input[type=checkbox]")
                const hasCheck = $checkbox.prop("checked");
                $checkbox.prop("checked", !hasCheck);
                const $checkBoxChildren = $_table.find("input[type=checkbox]:checked:not(" + checkAllClass + ")");
                selected[tableDataId] = parseCheckkboxValue($checkBoxChildren)
                toggleEnableButton($_table, dataId, selected[tableDataId]);
            });
        }


        function setCheckAllListener($_table, $checkAlEl, dataId) {
            const tableDataId = $_table.attr("data-id")
            const _className = $checkAlEl.attr("class");
            console.log(_className)
            $_table.off("click", '.' + _className)
            .on("click", '.' + _className, function() {
                    console.log("checkall")
                    const parentHasCheck = $(this).prop("checked");
                    const $checkBoxChildren = $_table.find("input[type=checkbox]:not(." + _className + ")");
                    $checkBoxChildren.prop("checked", parentHasCheck)
                    selected[tableDataId] = parseCheckkboxValue($checkBoxChildren)
                    toggleEnableButton($_table, dataId, selected[tableDataId]);
                });
        }

        function createSearch($_table, index, tdataId, title =  "") {
            // console.log($container)
            // const title = $container.attr("data-title");
            const dataId = "searchable-" + index;
            const input = "<input type='text' name='seach' class='form-control mb-2' placeholder='Masukkan keyword' data-id='" + dataId + "' />"
            const moveButtonId = 'move-data-'+index
            var searchInputTpl = "<div class='row'>"
            searchInputTpl += "<div class='col-md-12'>"
            // searchInputTpl += "<div class='form-floating-static'>"
            searchInputTpl += "<div>"
            searchInputTpl += input
            // searchInputTpl += '<label for="floatingInputInvalid">Cari data</label>'
            searchInputTpl += "</div>"
            searchInputTpl += "</div>"
            searchInputTpl += "</div>"
            const moveButton= '<button disabled="true" class="btn btn-primary btn-sm ms-1" id="'+moveButtonId+'">Pindahkan</button>';
            const $parent = $_table.parent();
            var buttonToolsTpl = '<div class="d-flex px-0">';
                buttonToolsTpl += '<label class="me-auto">'+title+'</label>';
                    buttonToolsTpl += '<div>';
                        buttonToolsTpl += moveButton;
                    buttonToolsTpl += '</div>';
                buttonToolsTpl += '</div>';
            
            const $accordionHeader = $_table.parents("div.accordion-item").find(".accordion-header");
            $accordionHeader.attr("data-key", "accordion-header-"+index);
            $accordionHeader.prepend(buttonToolsTpl)
            $parent.prepend(searchInputTpl)
            addMoveButtonListener($_table, $accordionHeader, moveButtonId, tdataId)
            listenKeyUp($_table, $(input), dataId)
            
        }
        function listenKeyUp($_table, $input, dataId)
        {
            var delayTimer;
            clearTimeout(delayTimer);
            $_table.parent().off("keyup", "input[data-id="+dataId+"]").on("keyup", "input[data-id="+dataId+"]", function(){
                $thisInput = $(this)
                delayTimer = setTimeout(function() {
                var value = $thisInput.val().toLowerCase();
                $_table.find("tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
                }, 500);
            })
        }
        function addMoveButtonListener($_table, $accordionHeader,moveButtonId, dataId){
            $accordionHeader.off("click", "#"+moveButtonId).on("click", "#"+moveButtonId, function(){
                
                if(typeof moveToCallBack != "undefined") {
                    moveToCallBack(selected[dataId], function(e){
                        clearSelected($_table, dataId);
                        toggleEnableButton($_table, dataId, []);
                        
                    })
                }
            })
        }

        function clearSelected($_table, dataId)
        {
            $_table.find("input[type=checkbox]").prop("checked", false);
            selected[dataId] = []
        }

        function toggleEnableButton($_table, dataId, selectedData)
        {
            
            const $accordionHeader = $_table.parents("div.accordion-item").find(".accordion-header");
            var $btn = $accordionHeader.find("button");
            if(selectedData.length > 0) {
                $btn.prop("disabled", false)
            }else{
                $btn.prop("disabled", true)

            }
        }

        function parseCheckkboxValue($checkBoxChildren)
        {
            var a = [];
            $checkBoxChildren.each(async function() {
                a.push($(this).val());
            });
            return a;
        }
        function onCheckedCheckbox($el, dataId)
        {
            const $checkboxes =$el.find("input[type=checkbox]:not("+checkAllClass+")");
            $el.off("click", "input[type=checkbox]").on("click", "input[type=checkbox]", function(){
                const checkboxesChecked =$el.find("input[type=checkbox]:checked:not("+checkAllClass+")");
                const checked = parseCheckkboxValue(checkboxesChecked)
                selected[dataId] = checked
                toggleEnableButton($el, dataId, selected[dataId])
                // if(selected[dataId].length)
            })
        }
        
        var delayTimerG;
        
        function registerAll()
        {
            $table.each(function(index, el) {
                const dataId = "_api-talbe-" + index;
                $(el).attr("data-id", dataId);
                listenForCheckAll($(el), dataId)
                listenClickableCol($(el), index, dataId)
                createSearch($(el), index, dataId)
                onCheckedCheckbox($(el), dataId)
                $registeredTables.push($(el))
                // registeredTables
                selected[dataId] = [];
            })
        }
        function init()
        {
            console.log("initial")
            
            if(typeof globalSearchClass != "undefined") {
                $(globalSearchClass).keyup( delay(function(){
                    
                    $thisInput = $(this)
                    var tableDataNotFound = "<tr class='table-data-not-found'><td colspan='4' class='text-center'>Data tidak ditemukan</td></tr>";
                    var value = $thisInput.val().toLowerCase();
                        $registeredTables.map(function(el, index) {
                            var rs = 0;
                            $(el).find("tbody tr").filter(function() {
                                if($(this).text().toLowerCase().indexOf(value) > -1) {
                                    rs++;
                                }
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                            if(rs==0){
                                $(el).find("tbody").append(tableDataNotFound);
                            }else{
                                $(el).find("tbody tr.table-data-not-found").remove();
                            }
                            $(el.removeClass("loading"))
                        })
                }, 500, function(){
                    $registeredTables.map(function(el, index) {
                        $(el.addClass("loading"))
                    })
                }))
            }
        }

        function destroy()
        {
            
        }
       
        $.fn.reload = function() {
        };
        $.fn.register = function(e, title = null) {
            
            const $tbl =  e.find("table")
            const index = e.attr("id");
            const dataId = "_api-talbe-" + index;
            $tbl.attr("data-id", dataId);
            createSearch($tbl, index, dataId, title)
            listenForCheckAllIndividual($tbl, dataId)
            listenClickableCol($tbl, index, dataId)
            onCheckedCheckbox($tbl, dataId)
            $registeredTables.push($tbl)
            selected[dataId] = [];
            loadData($tbl)
        };
        function loadData($tbl)
        {
            const url = $tbl.attr("data-url");
            $.ajax({
                url: url,
                dataType: "JSON",   
                success: function(res){
                    const {payload } = res
                    // console.log(payload)
                    var tpl = '';
                    $.each(payload, function(idx, val) {
                        tpl += '<tr>';
                            tpl += '<td scope="row">';
                                tpl += '<input type="checkbox" name="user_check[]" value="'+val.id+'"/>';
                            tpl += '</td>';
                            tpl += '<td data-clickable="true">'+val.name+'</td>';
                            tpl += '<td>'+val.id_team+'</td>';
                            tpl += '<td></td>';
                        tpl += '</tr>';
                    })
                    $tbl.find("tbody").html(tpl)
                } 
            });
            
        }

        // $.fn.loadData = function() {

        // }

        init()
        // console.log($(this));
        // console.log($registeredTables);
        // init();
        return this;

    };
    function delay(callback, ms, loadingCallBack) {
        var timer = 0;
  
        return function() {
            var context = this, args = arguments;
            loadingCallBack()
            clearTimeout(timer);
            timer = setTimeout(function () {
                callback.apply(context, args);
            }, ms || 0);
        };
    }
    $(function() {

        const $resourceEl = $("#resources");
        const $teamContainerSidebar = $("#team-approver");
        const $teamContainerModal = $("#team-approver-modal");
        const teamUrl = $resourceEl.attr("data-team-url");
        var $apiTable = null;
        function loadTeam()
        {
            $.ajax({
                url: teamUrl,
                success : function(res) {
                    console.log(res)
                    const {payload} = res;
                    createSideBarApproverTeam(payload)
                    createModalApproverTeam(payload)
                    // createTable(payload)
                }
            })
        }
        function createTable(payload)
        {
            var tpl = "";
            $.each(payload, function(idx, val) {
                tpl +='<div class="card card-gray">';
                    tpl +='<div class="card-body">';
                        tpl +='<div class="accordion" id="accordionPanelsStayOpenExample">';
                            tpl +='<div class="accordion-item accordion-item-table">';
                                tpl +='<h2 class="accordion-header">';

                                tpl +='</h2>';
                                tpl +='<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">';
                                    tpl +='<div class="accordion-body">';
                                        tpl +='<table class="table api-table border-table-gray">';
                                            tpl +='<thead>';
                                                tpl +='<tr>';
                                                    tpl +='<th scope="col"><input type="checkbox" name="chekalluser" class="chekalluser" /></th>';
                                                    tpl +='<th scope="col">Nama</th>';
                                                    tpl +='<th scope="col">Team</th>';
                                                    tpl +='<th scope="col">Handle</th>';
                                                tpl +='</tr>';
                                            tpl +='</thead>';
                                            tpl +='<tbody>';
                                                
                                            tpl +='</tbody>';
                                        tpl +='</table>';
                                    tpl +='</div>';
                                tpl +='</div>';
                            tpl +='</div>';
                        tpl +='</div>';
                    tpl +='</div>';
                tpl +='</div>';
            });
            $("#member-teams").html(tpl)
                    
        }
        function createModalApproverTeam(payload){
            var tpl = "";
            $.each(payload, function(idx, val) {
                tpl += '<div class="card mb-1">';
                    tpl += '<div class="card-body">';
                        tpl += '<div class="d-flex align-items-center contact">';
                            tpl += '<div class="avatar"></div>';
                            tpl += '<div class="ms-3 contact-info">';
                                tpl += '<p class="my-0">Johan Dani</p>';
                                tpl += '<p class="my-0 text-small">Finance</p>';
                                tpl += '<p class="my-0 text-small">50 User</p>';
                            tpl += '</div>';
                        tpl += '</div>';
                    tpl += '</div>';
                tpl += '</div>';
            });
            $teamContainerModal.html(tpl);
        }
        function createSideBarApproverTeam(payload)
        {
            var tpl = "";
            $.each(payload, function(idx, val) {
                tpl += '<div class="card mb-1 card-button" data-title="'+val.name+'" data-team-id="team-'+val.id+'" data-member-url="'+val.members_url+'">';
                    tpl += '<div class="card-body">';
                        tpl += '<div class="d-flex align-items-center contact">';
                            tpl += '<div class="avatar"></div>';
                            tpl += '<div class="ms-3 contact-info">';
                                tpl += '<p class="my-0">Johan Dani</p>';
                                tpl += '<p class="my-0 text-small">Finance</p>';
                                tpl += '<p class="my-0 text-small">50 User</p>';
                            tpl += '</div>';
                        tpl += '</div>';
                    tpl += '</div>';
                tpl += '</div>';
            });
            $teamContainerSidebar.html(tpl);
            $("body").off("click", ".card-button").on("click", ".card-button", function(){
                const memberUrl = $(this).attr("data-member-url");
                const teamId = $(this).attr("data-team-id");
                const hasLoad = $(this).hasClass("loaded");
                if(!hasLoad) {
                    $(this).addClass("loaded")
                    createTeamMemberCard(memberUrl, teamId, $(this).attr("data-title"))
                    
                }else{
                    $("#member-teams").find("div[data-card-id="+teamId+"]").remove();
                    $(this).removeClass("loaded")

                }
            })
        }
        
        function createTeamMemberCard(url, teamId, title)
        {
            // $.ajax({
            //     url: url,
            //     dataType: "JSON",   
            //     success: function(res){
            //         // console.log(res)
            //         const {payload } = res
                    
            //         // console.log($apiTable);
            //         // $apiTable.reload();
            //     } 
            // });
            var tpl ='<div class="card card-gray" id="apitable-card'+teamId+'" data-card-id="'+teamId+'">';
                tpl +='<div class="card-body">';
                    tpl +='<div class="accordion" id="accordionPanelsStayOpenExample">';
                        tpl +='<div class="accordion-item accordion-item-table">';
                            tpl +='<h2 class="accordion-header">';

                            tpl +='</h2>';
                            tpl +='<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">';
                                tpl +='<div class="accordion-body">';
                                    tpl +='<table class="table api-table border-table-gray" data-url="'+url+'">';
                                        tpl +='<thead>';
                                            tpl +='<tr>';
                                                tpl +='<th scope="col"><input type="checkbox" name="chekalluser" class="chekalluser" /></th>';
                                                tpl +='<th scope="col">Nama</th>';
                                                tpl +='<th scope="col">Team</th>';
                                                tpl +='<th scope="col">Handle</th>';
                                            tpl +='</tr>';
                                        tpl +='</thead>';
                                        tpl +='<tbody>';
                                            
                                        tpl +='</tbody>';
                                    tpl +='</table>';
                                tpl +='</div>';
                            tpl +='</div>';
                        tpl +='</div>';
                    tpl +='</div>';
                tpl +='</div>';
            tpl +='</div>'; 
            $("#member-teams").append(tpl)
            // initTable("#apitable-card"+teamId);
            $apiTable.register($("#apitable-card"+teamId), title);
            
        }
        loadTeam();
        // console.log(teamUrl);
        $apiTable = $(".api-table").apitable({
            checkAllClass: ".chekalluser",
            
            globalSearchClass : "#globalSearch",
            moveToCallBack: function(data, callback){
                $("#modalUserContact").modal("show")
                // console.log(data)
                // console.log(callback)
                // callback()
            }
        });
        function initTable(el){
            
        }
        
        

    })
</script>
@endsection