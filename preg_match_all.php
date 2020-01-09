<?php
$name = '浅水游';
//下面<<<EOT后面不能有空格
$html = '
            <div jquery-scrollbar="" ng-if="currentContact.isRoomContact()" class="scrollbar-dynamic members_inner ng-scope scroll-content" ng-init="isShowDelIcon=false" style="margin-bottom: 0px; margin-right: 0px;">
        <div class="member opt">
            <i class="web_wechat_add_friends" ng-click="addCharRoomMember()"></i>
        </div>
        <!-- ngIf: currentContact.isRoomOwner() -->
        <!-- ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="汇汇吧-傅道集">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699163789&amp;username=@dfd6c46761f6c481ba8c7ac56d15bb71cece77c50adaa69a808642fab55f6770&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699163789&amp;username=@dfd6c46761f6c481ba8c7ac56d15bb71cece77c50adaa69a808642fab55f6770&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">汇汇吧-傅道集</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="最美中国字-陈俊清">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=681132935&amp;username=@51f8e2f703e6a5db7d14209a09791557f9af43f88255f3a2f460158ad6e0f3ac&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=681132935&amp;username=@51f8e2f703e6a5db7d14209a09791557f9af43f88255f3a2f460158ad6e0f3ac&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">最美中国字-陈俊清</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="汇汇吧-齐总">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699177423&amp;username=@2388a30876ef1983be8002df2244deea66a0073a004e52b6eee714168d78af22&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699177423&amp;username=@2388a30876ef1983be8002df2244deea66a0073a004e52b6eee714168d78af22&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">汇汇吧-齐总</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="傅太太">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697259309&amp;username=@8afa07e0caa61e712288bc73daafbd4d&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697259309&amp;username=@8afa07e0caa61e712288bc73daafbd4d&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">傅太太</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="兰亦坤">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=679642506&amp;username=@9c2c521322605193350d2dd0db51ac40cc433bad77cbda1e8d8b8f9e50d11ea4&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=679642506&amp;username=@9c2c521322605193350d2dd0db51ac40cc433bad77cbda1e8d8b8f9e50d11ea4&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">兰亦坤</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="汇汇吧-春兰">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697272037&amp;username=@e81fffb89c0c0bb2ce8a2ae419e1cd3972f35c49a4579e46ed91fb55f1636d71&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697272037&amp;username=@e81fffb89c0c0bb2ce8a2ae419e1cd3972f35c49a4579e46ed91fb55f1636d71&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">汇汇吧-春兰</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="雷卉">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=680970352&amp;username=@555d625e1db50ae02cb180b5a9912d21&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=680970352&amp;username=@555d625e1db50ae02cb180b5a9912d21&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">雷卉</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="PM-陈丽珍">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699163615&amp;username=@1b5451c1d4f499f85af865fae9b1aceabfae9b992a0548f92d7c172faefb93ab&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699163615&amp;username=@1b5451c1d4f499f85af865fae9b1aceabfae9b992a0548f92d7c172faefb93ab&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">PM-陈丽珍</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="汇汇吧官方客服">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697236194&amp;username=@f263922f63796dc36f535df6c48b8b7cafd7532678168593af7e47513586d733&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697236194&amp;username=@f263922f63796dc36f535df6c48b8b7cafd7532678168593af7e47513586d733&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">汇汇吧官方客服</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="最美中国字-林晓慧">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697292508&amp;username=@21d43566c0a415258cf682b7cf80443d&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697292508&amp;username=@21d43566c0a415258cf682b7cf80443d&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">最美中国字-林晓慧</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="汇汇吧-邹论章">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=681092013&amp;username=@d37e5adfbb8594e60a82ed22f8b36d28&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=681092013&amp;username=@d37e5adfbb8594e60a82ed22f8b36d28&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">汇汇吧-邹论章</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="汇汇吧-黄亮亮">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=681092038&amp;username=@dfb9c35f10e33c681b464405d267cb8a24ffe514d810e9f5d4a3353407f3493d&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=681092038&amp;username=@dfb9c35f10e33c681b464405d267cb8a24ffe514d810e9f5d4a3353407f3493d&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">汇汇吧-黄亮亮</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="汇汇吧市场-蔡志汉">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697284460&amp;username=@d628478b6041e66d0105b9174a4e7c183252718d93c5f0a5bf2e331306fd5dbb&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697284460&amp;username=@d628478b6041e66d0105b9174a4e7c183252718d93c5f0a5bf2e331306fd5dbb&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">汇汇吧市场-蔡志汉</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="前端-杨裕炜">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699182583&amp;username=@ade7e8e0b9f1fc4433e057f8a5cdf1cc&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699182583&amp;username=@ade7e8e0b9f1fc4433e057f8a5cdf1cc&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">前端-杨裕炜</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="UI-施秀娟">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=695760451&amp;username=@87e23b4ab9f48562b72b70dccb76ce014e9b7b5320952e6ae9acce910fe1bb28&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=695760451&amp;username=@87e23b4ab9f48562b72b70dccb76ce014e9b7b5320952e6ae9acce910fe1bb28&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">UI-施秀娟</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="丁昌乾">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=681131758&amp;username=@fc65dab4a389d921593431524ec7257211c49178479420f261cd78e93a5c3d68&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=681131758&amp;username=@fc65dab4a389d921593431524ec7257211c49178479420f261cd78e93a5c3d68&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">丁昌乾</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="施巧凌">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697225090&amp;username=@5126245776bcf86418b6b71042c58e635cd702f07cc9fc55c3bdd7c6ce594f58&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697225090&amp;username=@5126245776bcf86418b6b71042c58e635cd702f07cc9fc55c3bdd7c6ce594f58&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">施巧凌</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="钟爱珍">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697246175&amp;username=@c1a5d5db77954648a97ede00b23dae1fb726daf632d53838f53d50feffdc0417&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697246175&amp;username=@c1a5d5db77954648a97ede00b23dae1fb726daf632d53838f53d50feffdc0417&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">钟爱珍</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="lynn">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697280335&amp;username=@82f9b4d7dc4fffc0ec4772868262fecf710ca2b269abde6d7069eb3d9f546e41&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697280335&amp;username=@82f9b4d7dc4fffc0ec4772868262fecf710ca2b269abde6d7069eb3d9f546e41&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">lynn</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="刘清杰">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699194043&amp;username=@432bf2cfb66b73d482aa0567590f9307c20b449796b044efc8dfca2fe2da8987&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699194043&amp;username=@432bf2cfb66b73d482aa0567590f9307c20b449796b044efc8dfca2fe2da8987&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">刘清杰</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="王快">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=681154159&amp;username=@28b39802fa353ca7ada725f483c37e96&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=681154159&amp;username=@28b39802fa353ca7ada725f483c37e96&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">王快</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="郑娴睿">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697222495&amp;username=@8bb36a3b39bdb56ae99bf72b87f8564a&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=697222495&amp;username=@8bb36a3b39bdb56ae99bf72b87f8564a&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">郑娴睿</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="余养林">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699155535&amp;username=@b67f5f119addc8748ddaa654a6adf45b19ba67029263c057f4279efd981177af&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699155535&amp;username=@b67f5f119addc8748ddaa654a6adf45b19ba67029263c057f4279efd981177af&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">余养林</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="陈俊杰">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=0&amp;username=@94f315a04041109b5d354be21990d6e0&amp;chatroomid=@196dc7830eb15d0726d311c904e27201&amp;skey=" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=0&amp;username=@94f315a04041109b5d354be21990d6e0&amp;chatroomid=@196dc7830eb15d0726d311c904e27201&amp;skey=" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">陈俊杰</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="王丙楠">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699185383&amp;username=@576f184d5eff9268c3affeabf59e6c23&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699185383&amp;username=@576f184d5eff9268c3affeabf59e6c23&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">王丙楠</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList --><div class="member ng-scope" ng-repeat="item in currentContact.MemberList" title="范进雄">
            <img class="avatar" src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699175382&amp;username=@59c177e228471cfc4069777c40aeb8a09738d81e9e3e71a0169d47fd1076803b&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" mm-src="/cgi-bin/mmwebwx-bin/webwxgeticon?seq=699175382&amp;username=@59c177e228471cfc4069777c40aeb8a09738d81e9e3e71a0169d47fd1076803b&amp;skey=@crypt_f276f6_725464008cc5d196af4761891be2adec" alt="" ng-click="showProfile($event,item.UserName)" title="">
            <p class="nickname ng-binding" ng-bind-html="getUserContact(item.UserName,currentContact.UserName).getDisplayName(currentContact.UserName)">范进雄</p>
            <!-- ngIf: $parent.isShowDelIcon && item.UserName != accountUserName -->
        </div><!-- end ngRepeat: item in currentContact.MemberList -->
    </div>
';

$pattern = '/ng-repeat="item in currentContact.MemberList" title="(.+?)">/';
preg_match_all($pattern, $html, $m);
print_r($m[1]);
?>