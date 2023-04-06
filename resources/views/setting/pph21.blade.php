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
                <div class="col-md-6" id="secondary-member-teams">
                    
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
            removeZeroResultContainer = false,
            withIndividualSearch = true

        } = config
        const $table = $(this);
        var selected = [];
        var $registeredTables = [];
        
        function listenForCheckAll($_table, dataId) {
            if (typeof checkAllClass != "undefined") {
                $checkAlEl = $table.find(checkAllClass)
                setCheckAllListener($_table, $checkAlEl, dataId)
                
            }
        }
        function listenForCheckAllIndividual($_table, dataId) {
            if (typeof checkAllClass != "undefined") {
                $checkAlEl = $_table.find(checkAllClass)
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
            $_table.off("click", '.' + _className)
            .on("click", '.' + _className, function() {
                    const parentHasCheck = $(this).prop("checked");
                    // const $checkBoxChildren = $_table.find("input[type=checkbox]:not(." + _className + ")");
                    const $checkBoxChildren = $_table.find("input[type=checkbox]:visible:not(." + _className + ")");
                    $checkBoxChildren.prop("checked", parentHasCheck)
                    selected[tableDataId] = parseCheckkboxValue($checkBoxChildren)
                    toggleEnableButton($_table, dataId, selected[tableDataId]);
                });
        }

        function createSearch($_table, index, tdataId, title =  "") {
            const dataId = "searchable-" + index;
            const input = "<input type='text' name='seach' class='form-control mb-2' placeholder='Masukkan keyword' data-id='" + dataId + "' />"
            const moveButtonId = 'move-data-'+index
            var selectedTpl = '<p class="py-0 my-0 me-2" id="selection-item-'+tdataId+'"></p>';
            var searchInputTpl = "<div class='row'>"
                    searchInputTpl += "<div class='col-md-12'>"
                        searchInputTpl += input
                    searchInputTpl += "<div>"
                searchInputTpl += "</div>"
            // searchInputTpl += "</div>"
            // searchInputTpl += "</div>"
            const moveButton= '<button disabled="true" class="btn btn-primary btn-sm ms-1" id="'+moveButtonId+'">Pindahkan</button>';
            const $parent = $_table.parent();
            // var buttonToolsTpl = '<div class="d-flex px-0">';
            var buttonToolsTpl = '<div class="d-flex">';
                buttonToolsTpl += '<label class="me-auto">'+title+'</label>';
                    buttonToolsTpl += '<div class="d-flex d-flex align-items-center">';
                        buttonToolsTpl += selectedTpl+moveButton;
                    buttonToolsTpl += '</div>';
                buttonToolsTpl += '</div>';
            
            const $accordionHeader = $_table.parents("div.accordion-item").find(".accordion-header");
            $accordionHeader.attr("data-key", "accordion-header-"+index);
            $accordionHeader.prepend(buttonToolsTpl)
            // $parent.prepend(selectedTpl)
            if(withIndividualSearch) {
                $parent.prepend(searchInputTpl)
            }
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
                const $selectedContainer = $("#selection-item-"+dataId)
                selected[dataId] = checked
                $selectedContainer.html(selected[dataId].length ? selected[dataId].length + " Selection" : "")
                toggleEnableButton($el, dataId, selected[dataId])
            })
        }
        
        var delayTimerG;
        
        function registerAll()
        {
            $table.each(function(index, el) {
                const dataId = "_api-table-" + index;
                $(el).attr("data-id", dataId);
                listenForCheckAll($(el), dataId)
                listenClickableCol($(el), index, dataId)
                createSearch($(el), index, dataId)
                onCheckedCheckbox($(el), dataId)
                $registeredTables.push($(el))
                selected[dataId] = [];
            })
        }
        function init()
        {
            
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
                            // apitable-cardteam-marketing
                            var keyDataId = $(el).attr("data-id");
                            keyDataId = keyDataId.replace("_api-table-","")
                            $container = $("div#"+keyDataId)
                            
                            if(rs==0){
                                if(removeZeroResultContainer == true) {
                                    $container.hide()
                                }
                                $(el).find("tbody").append(tableDataNotFound);
                            }else{
                                if(removeZeroResultContainer == true) {
                                    $container.show()
                                }
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
            const dataId = "_api-table-" + index;
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
                    var tpl = '';
                    $.each(payload, function(idx, val) {
                        tpl += '<tr>';
                            tpl += '<td scope="row">';
                                tpl += '<input type="checkbox" name="user_check[]" value="'+val.id+'"/>';
                            tpl += '</td>';
                            tpl += '<td data-clickable="true">'+val.name+'</td>';
                            tpl += '<td>'+val.id_team+'</td>';
                            // tpl += '<td></td>';
                        tpl += '</tr>';
                    })
                    $tbl.find("tbody").html(tpl)
                } 
            });
            
        }
        init()
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
                    const {payload} = res;
                    createSideBarApproverTeam(payload)
                    createModalApproverTeam(payload)
                }
            })
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
            var defaultCard = [];
            $.each(payload, function(idx, val) {
                // var linkClass = val.id != "master" ?"card-button" : ""
                var loadDefault = val.id == "master" ?" loaded" : ""
                var linkClass ="card-button"+loadDefault
                tpl += '<div class="card mb-1 '+linkClass+'" data-title="'+val.approver+'" data-team-id="team-'+val.id+'" data-member-url="'+val.members_url+'">';
                    tpl += '<div class="card-body">';
                        tpl += '<div class="d-flex align-items-center contact">';
                            tpl += '<div class="avatar"></div>';
                            tpl += '<div class="ms-3 contact-info">';
                                tpl += '<p class="my-0">'+val.approver+'</p>';
                                tpl += '<p class="my-0 text-small">'+val.name+'</p>';
                                tpl += '<p class="my-0 text-small">50 User</p>';
                            tpl += '</div>';
                        tpl += '</div>';
                    tpl += '</div>';
                tpl += '</div>';
                if(val.id == "master") {
                    defaultCard = [$("#apitable-card"+val.id), val.id, val.approver, val.members_url];
                }
            });
            if(defaultCard) {
                createTeamMemberCard(defaultCard[3], "team-"+defaultCard[1], defaultCard[2], "#member-teams")
            }
            
            $teamContainerSidebar.html(tpl);
            
            $("body").off("click", ".card-button").on("click", ".card-button", function(){
                const memberUrl = $(this).attr("data-member-url");
                const teamId = $(this).attr("data-team-id");
                const hasLoad = $(this).hasClass("loaded");
                if(!hasLoad) {
                    $(this).addClass("loaded")
                    if(teamId == "team-master") {
                        createTeamMemberCard(memberUrl, teamId, $(this).attr("data-title"), "#member-teams")
                    } else{

                        createTeamMemberCard(memberUrl, teamId, $(this).attr("data-title"))
                    }
                    
                }else{
                    if(teamId == "team-master") {
                        $("#member-teams").find("div[data-card-id="+teamId+"]").remove();
                    }else{
                        $("#secondary-member-teams").find("div[data-card-id="+teamId+"]").remove();
                    }
                    $(this).removeClass("loaded")

                }
            })
        }
        
        function createTeamMemberCard(url, teamId, title, contailerId = "#secondary-member-teams")
        {
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
                                                // tpl +='<th scope="col">Handle</th>';
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
            $(contailerId).append(tpl)
            $apiTable.register($("#apitable-card"+teamId), title);
            
        }
        

        $apiTable = $(".api-table").apitable({
            checkAllClass: ".chekalluser",
            removeZeroResultContainer: true,
            globalSearchClass : "#globalSearch",
            withIndividualSearch: false,
            moveToCallBack: function(data, callback){
                $("#modalUserContact").modal("show")
                console.log(data)
                console.log(callback)
                // callback()
            }
        });
        loadTeam();
        function initTable(el){
            
        }
        
        

    })
</script>
@endsection