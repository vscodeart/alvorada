<div class="bg-cover flex flex-col bg-center bg-[url('@if(isset($headerSettings) && $headerSettings != null){{ Voyager::image($headerSettings->header_image) }}@endif')]
{{ request()->routeIs('page.home') ? 'h-[530px]' : 'h-[339px]' }}   @if($locale == 'ge') geo_header_menu @else header_menu @endif">
    <div class="h-22 bg-zinc-900 opacity-90 flex items-center">
        <header class="@if($locale == 'ge') geo_header_menu @else header_menu @endif w-full @if($locale == 'ge') font-Contractica @endif">

            <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 " aria-label="Global">

                <div class="w-full flex justify-between lg:hidden ">
                    <a href="{{ route('page.home') }}">
                        <div class="flex gap-3">

                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.11729 16.0817V15.6611C9.61525 15.6611 9.99855 15.6327 10.2705 15.5757C10.5424 15.5188 10.7324 15.4271 10.8405 15.3006C10.9486 15.1741 10.9846 15.0128 10.9453 14.8168C10.9093 14.6207 10.8307 14.3804 10.7127 14.1021L9.71026 11.7683H4.13439L3.4759 13.2641C3.28917 13.672 3.18106 14.0199 3.1483 14.3076C3.11554 14.5954 3.16795 14.8326 3.30555 15.0223C3.44314 15.2121 3.66919 15.3607 3.98697 15.4651C4.30147 15.5694 4.71753 15.6358 5.2286 15.6643V16.0849H0V15.6643C0.268637 15.6137 0.504514 15.5504 0.714182 15.4746C0.920574 15.3987 1.12041 15.2785 1.30387 15.114C1.49061 14.9496 1.67079 14.7282 1.85098 14.4531C2.02788 14.178 2.2179 13.8175 2.42101 13.3716L8.36052 0.586182H8.58329L14.4147 13.3906C14.6145 13.8491 14.8078 14.2254 14.9945 14.5164C15.1813 14.8073 15.3647 15.035 15.5515 15.2057C15.7382 15.3734 15.9217 15.4904 16.1084 15.5568C16.2951 15.62 16.4884 15.658 16.6883 15.6643V16.0849H9.12057L9.11729 16.0817ZM6.96819 5.69655L4.55045 10.9461H9.29747L6.96819 5.69655Z" fill="white" />
                            </svg>
                            <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1351 16.0817H0.234741V15.6611C0.709771 15.6611 1.09307 15.6326 1.38136 15.5757C1.66966 15.5188 1.89571 15.4176 2.05623 15.269C2.21676 15.1235 2.32159 14.9211 2.37401 14.665C2.42643 14.412 2.45264 14.0894 2.45264 13.7004V3.29629C2.45264 2.91049 2.42643 2.58792 2.37401 2.33177C2.32159 2.07879 2.21676 1.87639 2.05623 1.72776C1.89571 1.5823 1.67293 1.47794 1.38136 1.42102C1.09307 1.36409 0.709771 1.33563 0.234741 1.33563V0.915039H8.4937V1.33563C8.01867 1.33563 7.62554 1.36409 7.31759 1.42102C7.00964 1.47794 6.76394 1.5823 6.58048 1.72776C6.39702 1.87639 6.27253 2.07562 6.20046 2.33177C6.12838 2.58792 6.09562 2.90732 6.09562 3.29629V13.7004C6.09562 14.0388 6.11855 14.3076 6.1677 14.5068C6.21684 14.7092 6.32495 14.861 6.4953 14.9685C6.66566 15.0761 6.92119 15.1488 7.26518 15.1836C7.60589 15.2184 8.07109 15.2373 8.65751 15.2373C9.20133 15.2373 9.68946 15.2152 10.1285 15.1678C10.5675 15.1203 10.9639 15.0381 11.3209 14.9148C11.678 14.7915 11.9958 14.627 12.2808 14.4151C12.5626 14.2033 12.8214 13.9313 13.054 13.6024C13.2866 13.2735 13.5028 12.8751 13.6961 12.407C13.8894 11.9422 14.0794 11.3919 14.2661 10.7594H14.7248L14.1351 16.0754V16.0817Z" fill="white" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.7113 2.03454C15.3247 2.39821 14.9643 2.92948 14.6302 3.63153L8.7005 16.4138H8.31065L2.55788 3.60939C2.32855 3.09392 2.12872 2.68598 1.96164 2.38872C1.79456 2.09146 1.63403 1.86377 1.47678 1.70565C1.31953 1.54753 1.15572 1.44634 0.982091 1.40523C0.80846 1.36095 0.602068 1.34198 0.362915 1.34198V0.921387H7.89786V1.34198C7.37042 1.34198 6.96419 1.3736 6.67589 1.44001C6.39088 1.50326 6.19431 1.60129 6.08948 1.73095C5.98465 1.86061 5.95516 2.02189 5.99447 2.21479C6.03378 2.40769 6.11568 2.63855 6.23362 2.90418L10.0666 11.5437L13.6441 3.74221C14.4009 2.14206 13.8341 1.34198 11.9373 1.34198V0.921387H17.0774V1.34198C16.55 1.44318 16.0913 1.67403 15.7047 2.03454H15.7113Z" fill="white" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.3744 10.6077C17.1746 11.2844 16.8896 11.9201 16.5227 12.5083C16.1557 13.0965 15.7167 13.6309 15.2057 14.1116C14.6979 14.5923 14.1311 15.0034 13.5119 15.3449C12.8928 15.6864 12.2277 15.9489 11.5168 16.1355C10.8059 16.3221 10.0721 16.4138 9.31531 16.4138C8.55854 16.4138 7.8247 16.3189 7.12034 16.1355C6.41271 15.9489 5.75422 15.6864 5.13505 15.3449C4.51915 15.0034 3.95566 14.5923 3.44787 14.1116C2.94008 13.6309 2.50109 13.0965 2.13745 12.5083C1.7738 11.9201 1.49206 11.2876 1.28895 10.614C1.08911 9.94043 0.987549 9.23206 0.987549 8.49523C0.987549 7.7584 1.08911 7.05952 1.28895 6.37962C1.48879 5.69971 1.77053 5.0704 2.13745 4.48537C2.50109 3.90033 2.93681 3.36905 3.44787 2.88838C3.95566 2.4077 4.51915 1.99659 5.13505 1.65506C5.75095 1.31352 6.41271 1.05105 7.12034 0.864469C7.8247 0.67789 8.55854 0.586182 9.31531 0.586182C10.0721 0.586182 10.8059 0.681052 11.5168 0.864469C12.2277 1.05105 12.8928 1.31352 13.5119 1.65506C14.1311 1.99659 14.6979 2.4077 15.2057 2.88838C15.7135 3.36905 16.1525 3.90033 16.5227 4.48537C16.8896 5.0704 17.1746 5.69971 17.3744 6.37962C17.5743 7.05636 17.6758 7.76156 17.6758 8.49523C17.6758 9.2289 17.5743 9.93094 17.3744 10.6108V10.6077ZM13.4104 6.87611C13.3547 6.31953 13.263 5.78193 13.1385 5.25698C13.0107 4.73203 12.8436 4.2387 12.6372 3.777C12.4276 3.31529 12.172 2.90735 11.8641 2.55633C11.5561 2.20531 11.1925 1.93018 10.7732 1.72779C10.3538 1.52856 9.86896 1.42737 9.31858 1.42737C8.7682 1.42737 8.28662 1.52856 7.87056 1.73412C7.4545 1.93967 7.09086 2.21163 6.78291 2.55633C6.47496 2.90103 6.21942 3.30581 6.01303 3.77067C5.80992 4.23554 5.64284 4.73203 5.51835 5.25698C5.39058 5.78193 5.30212 6.31953 5.24971 6.87611C5.19729 7.43268 5.17109 7.97344 5.17109 8.49523C5.17109 9.01702 5.19729 9.57043 5.24971 10.1238C5.30212 10.6804 5.39058 11.2212 5.51835 11.743C5.64611 12.2679 5.80992 12.7612 6.01303 13.223C6.21615 13.6847 6.47496 14.0894 6.78291 14.4373C7.09086 14.7852 7.4545 15.0603 7.87056 15.2658C8.28662 15.4714 8.7682 15.5726 9.31858 15.5726C9.86896 15.5726 10.3538 15.4714 10.7732 15.2658C11.1925 15.0603 11.5561 14.7852 11.8641 14.4373C12.172 14.0894 12.4308 13.6847 12.6372 13.223C12.8436 12.7612 13.014 12.2679 13.1385 11.743C13.2662 11.218 13.3547 10.6804 13.4104 10.1238C13.4661 9.56727 13.4956 9.02334 13.4956 8.49523C13.4956 7.96712 13.4661 7.43268 13.4104 6.87611Z" fill="white" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6615 16.0817L7.63275 9.1846H6.56147V13.8111C6.56147 14.178 6.58768 14.4784 6.64665 14.7156C6.70235 14.9527 6.80718 15.1393 6.96443 15.2816C7.12168 15.4239 7.34118 15.5188 7.62292 15.5789C7.90467 15.6358 8.27814 15.6643 8.73678 15.6643V16.0849H0.766113V15.6643C1.24114 15.6643 1.62117 15.6358 1.90291 15.5789C2.18465 15.522 2.40087 15.4208 2.54829 15.2721C2.69572 15.1267 2.794 14.9243 2.83659 14.6681C2.88245 14.4151 2.90211 14.0926 2.90211 13.7036V3.29629C2.90211 2.91049 2.87918 2.58792 2.83659 2.33177C2.79072 2.07879 2.69572 1.87639 2.54829 1.72776C2.40087 1.5823 2.18465 1.47794 1.90291 1.42102C1.62117 1.36409 1.24114 1.33563 0.766113 1.33563V0.915039H9.52632C10.4174 0.915039 11.2135 1.01307 11.9113 1.2123C12.6091 1.40837 13.2021 1.68665 13.6836 2.04716C14.1652 2.40451 14.5354 2.83775 14.7877 3.34373C15.0399 3.8497 15.1677 4.41577 15.1677 5.03875C15.1677 5.48464 15.1022 5.91156 14.9679 6.3195C14.8335 6.72745 14.6271 7.10061 14.3421 7.43898C14.0604 7.77735 13.7 8.07145 13.261 8.32127C12.822 8.5711 12.2946 8.764 11.6787 8.8905L16.0817 14.8421C16.1931 15.0002 16.3143 15.1298 16.4486 15.2342C16.583 15.3385 16.7173 15.4239 16.8483 15.4872C16.9794 15.5504 17.1137 15.5979 17.2447 15.6232C17.3758 15.6485 17.497 15.6611 17.6084 15.6611V16.0817H12.6582H12.6615ZM11.22 3.82441C11.1283 3.42911 10.9612 3.07809 10.7254 2.77134C10.4862 2.46143 10.1553 2.21793 9.7327 2.03451C9.31009 1.8511 8.76954 1.75939 8.1176 1.75939H6.56803V8.34341H8.35021C8.92352 8.34341 9.39855 8.2517 9.78185 8.06829C10.1651 7.88487 10.4731 7.64137 10.7057 7.33778C10.9383 7.0342 11.1054 6.68001 11.2069 6.28472C11.3085 5.88626 11.3576 5.47199 11.3576 5.04191C11.3576 4.61183 11.3118 4.2197 11.2168 3.82757L11.22 3.82441Z" fill="white" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.51856 16.0817V15.6611C10.0165 15.6611 10.3998 15.6327 10.6717 15.5757C10.9436 15.5188 11.1336 15.4271 11.2418 15.3006C11.3499 15.1741 11.3859 15.0128 11.3466 14.8168C11.3106 14.6207 11.2319 14.3804 11.114 14.1021L10.1115 11.7683H4.53893L3.88044 13.2641C3.69371 13.672 3.5856 14.0199 3.55283 14.3076C3.52007 14.5954 3.57249 14.8326 3.71009 15.0223C3.84768 15.2121 4.07374 15.3607 4.39152 15.4651C4.70602 15.5694 5.12207 15.6358 5.63314 15.6643V16.0849H0.404541V15.6643C0.673178 15.6137 0.909053 15.5504 1.11872 15.4746C1.32511 15.3987 1.52496 15.2785 1.70842 15.114C1.89515 14.9496 2.07533 14.7282 2.25552 14.4531C2.43242 14.178 2.62244 13.8175 2.82556 13.3716L8.76179 0.586182H8.98456L14.8159 13.3906C15.0158 13.8491 15.2091 14.2254 15.3958 14.5164C15.5826 14.8073 15.766 15.035 15.9527 15.2057C16.1395 15.3734 16.3229 15.4904 16.5097 15.5568C16.6964 15.62 16.8897 15.658 17.0895 15.6643V16.0849H9.52182L9.51856 16.0817ZM7.36946 5.69655L4.95172 10.9461H9.69874L7.36946 5.69655Z" fill="white" />
                            </svg>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.6568 11.5089C15.303 12.4355 14.7919 13.2356 14.117 13.9123C13.4454 14.5891 12.6232 15.1203 11.6534 15.5061C10.6837 15.8888 9.58295 16.0817 8.34788 16.0817H0.501709V15.6611C0.976738 15.6611 1.36004 15.6326 1.64833 15.5757C1.93663 15.5188 2.16268 15.4176 2.31665 15.269C2.4739 15.1235 2.57545 14.9211 2.62787 14.665C2.68029 14.412 2.7065 14.0894 2.7065 13.7004V3.29629C2.7065 2.91049 2.68029 2.58792 2.62787 2.33177C2.57545 2.07879 2.47063 1.87639 2.31665 1.72776C2.1594 1.5823 1.93663 1.47794 1.64833 1.42102C1.36004 1.36409 0.976738 1.33563 0.501709 1.33563V0.915039H8.34788C9.58295 0.915039 10.6837 1.11427 11.6534 1.51272C12.6232 1.91118 13.4454 2.45511 14.117 3.14134C14.7886 3.83073 15.303 4.63397 15.6568 5.55105C16.0106 6.46813 16.1875 7.44846 16.1875 8.48888C16.1875 9.52929 16.0106 10.576 15.6568 11.5026V11.5089ZM11.9122 6.89189C11.85 6.35429 11.7452 5.83566 11.601 5.33601C11.4569 4.83636 11.2669 4.36833 11.031 3.93193C10.7984 3.49552 10.5035 3.11604 10.1497 2.79664C9.7959 2.47724 9.38311 2.22425 8.91136 2.03768C8.43961 1.8511 7.89579 1.75939 7.27989 1.75939H6.36586V13.7036C6.36586 14.004 6.38552 14.257 6.42811 14.4562C6.46742 14.6586 6.54605 14.8168 6.65744 14.9338C6.76882 15.0508 6.91951 15.1361 7.10953 15.1867C7.29954 15.2373 7.54525 15.2626 7.84992 15.2626C8.38392 15.2626 8.85895 15.1741 9.27829 14.9938C9.69435 14.8136 10.058 14.5638 10.3659 14.2475C10.6739 13.9281 10.9327 13.555 11.1391 13.1217C11.3455 12.6916 11.5158 12.2236 11.6469 11.724C11.7779 11.2212 11.8697 10.6962 11.9253 10.1491C11.981 9.59887 12.0105 9.04862 12.0105 8.49837C12.0105 7.94812 11.9778 7.43265 11.9155 6.89505L11.9122 6.89189Z" fill="white" />
                            </svg>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.2771 16.0817V15.6611C9.77506 15.6611 10.1584 15.6327 10.4303 15.5757C10.7022 15.5188 10.8922 15.4271 11.0003 15.3006C11.1084 15.1741 11.1445 15.0128 11.1052 14.8168C11.0691 14.6207 10.9905 14.3804 10.8725 14.1021L9.87007 11.7683H4.29748L3.63899 13.2641C3.45225 13.672 3.34414 14.0199 3.31138 14.3076C3.27862 14.5954 3.33105 14.8326 3.46864 15.0223C3.60624 15.2121 3.83227 15.3607 4.15005 15.4651C4.46455 15.5694 4.88063 15.6358 5.39169 15.6643V16.0849H0.163086V15.6643C0.431723 15.6137 0.667598 15.5504 0.877266 15.4746C1.08366 15.3987 1.28349 15.2785 1.46695 15.114C1.65369 14.9496 1.83389 14.7282 2.01407 14.4531C2.19098 14.178 2.38099 13.8175 2.5841 13.3716L8.51705 0.586182H8.73982L14.5712 13.3906C14.7711 13.8491 14.9643 14.2254 15.1511 14.5164C15.3378 14.8073 15.5213 15.035 15.708 15.2057C15.8948 15.3734 16.0782 15.4904 16.265 15.5568C16.4517 15.62 16.645 15.658 16.8448 15.6643V16.0849H9.2771V16.0817ZM7.12472 5.69655L4.70699 10.9461H9.454L7.12472 5.69655Z" fill="white" />
                            </svg>

                        </div>
                    </a>
                    <div>
                        <svg width="39" height="13" viewBox="0 0 39 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="39" height="1.625" fill="white"/>
                            <rect x="13" y="11.375" width="26" height="1.625" fill="white"/>
                        </svg>

                    </div>

                </div>

                <div class="hidden lg:flex lg:gap-x-5  ">
                    <a href="{{ route('page.home') }}"  {{ request()->routeIs('page.home') ? "class=font-bold":"" }}   >{{ __('Home') }}</a>
                    <a href="#" >{{ __('Who We Are') }}</a>
                    <a href="{{ route('page.services') }}" {{ request()->routeIs('page.services*') ? "class=font-bold":'' }}  >{{ __('Services') }}</a>
                    <a href="{{ route('page.our.team') }}" {{ request()->routeIs('page.our.team') ? "class=font-bold":'' }} >{{ __('Our Team') }}</a>
                    <a href="gallery.php?p=gallery" >{{ __('Gallery') }}</a>
                </div>

                <div class="hidden lg:flex lg:gap-x-5 ">
                    <a href="{{ route('page.home') }}">
                        <div class="text-center flex gap-3">

                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.11729 16.0817V15.6611C9.61525 15.6611 9.99855 15.6327 10.2705 15.5757C10.5424 15.5188 10.7324 15.4271 10.8405 15.3006C10.9486 15.1741 10.9846 15.0128 10.9453 14.8168C10.9093 14.6207 10.8307 14.3804 10.7127 14.1021L9.71026 11.7683H4.13439L3.4759 13.2641C3.28917 13.672 3.18106 14.0199 3.1483 14.3076C3.11554 14.5954 3.16795 14.8326 3.30555 15.0223C3.44314 15.2121 3.66919 15.3607 3.98697 15.4651C4.30147 15.5694 4.71753 15.6358 5.2286 15.6643V16.0849H0V15.6643C0.268637 15.6137 0.504514 15.5504 0.714182 15.4746C0.920574 15.3987 1.12041 15.2785 1.30387 15.114C1.49061 14.9496 1.67079 14.7282 1.85098 14.4531C2.02788 14.178 2.2179 13.8175 2.42101 13.3716L8.36052 0.586182H8.58329L14.4147 13.3906C14.6145 13.8491 14.8078 14.2254 14.9945 14.5164C15.1813 14.8073 15.3647 15.035 15.5515 15.2057C15.7382 15.3734 15.9217 15.4904 16.1084 15.5568C16.2951 15.62 16.4884 15.658 16.6883 15.6643V16.0849H9.12057L9.11729 16.0817ZM6.96819 5.69655L4.55045 10.9461H9.29747L6.96819 5.69655Z" fill="white" />
                            </svg>
                            <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1351 16.0817H0.234741V15.6611C0.709771 15.6611 1.09307 15.6326 1.38136 15.5757C1.66966 15.5188 1.89571 15.4176 2.05623 15.269C2.21676 15.1235 2.32159 14.9211 2.37401 14.665C2.42643 14.412 2.45264 14.0894 2.45264 13.7004V3.29629C2.45264 2.91049 2.42643 2.58792 2.37401 2.33177C2.32159 2.07879 2.21676 1.87639 2.05623 1.72776C1.89571 1.5823 1.67293 1.47794 1.38136 1.42102C1.09307 1.36409 0.709771 1.33563 0.234741 1.33563V0.915039H8.4937V1.33563C8.01867 1.33563 7.62554 1.36409 7.31759 1.42102C7.00964 1.47794 6.76394 1.5823 6.58048 1.72776C6.39702 1.87639 6.27253 2.07562 6.20046 2.33177C6.12838 2.58792 6.09562 2.90732 6.09562 3.29629V13.7004C6.09562 14.0388 6.11855 14.3076 6.1677 14.5068C6.21684 14.7092 6.32495 14.861 6.4953 14.9685C6.66566 15.0761 6.92119 15.1488 7.26518 15.1836C7.60589 15.2184 8.07109 15.2373 8.65751 15.2373C9.20133 15.2373 9.68946 15.2152 10.1285 15.1678C10.5675 15.1203 10.9639 15.0381 11.3209 14.9148C11.678 14.7915 11.9958 14.627 12.2808 14.4151C12.5626 14.2033 12.8214 13.9313 13.054 13.6024C13.2866 13.2735 13.5028 12.8751 13.6961 12.407C13.8894 11.9422 14.0794 11.3919 14.2661 10.7594H14.7248L14.1351 16.0754V16.0817Z" fill="white" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.7113 2.03454C15.3247 2.39821 14.9643 2.92948 14.6302 3.63153L8.7005 16.4138H8.31065L2.55788 3.60939C2.32855 3.09392 2.12872 2.68598 1.96164 2.38872C1.79456 2.09146 1.63403 1.86377 1.47678 1.70565C1.31953 1.54753 1.15572 1.44634 0.982091 1.40523C0.80846 1.36095 0.602068 1.34198 0.362915 1.34198V0.921387H7.89786V1.34198C7.37042 1.34198 6.96419 1.3736 6.67589 1.44001C6.39088 1.50326 6.19431 1.60129 6.08948 1.73095C5.98465 1.86061 5.95516 2.02189 5.99447 2.21479C6.03378 2.40769 6.11568 2.63855 6.23362 2.90418L10.0666 11.5437L13.6441 3.74221C14.4009 2.14206 13.8341 1.34198 11.9373 1.34198V0.921387H17.0774V1.34198C16.55 1.44318 16.0913 1.67403 15.7047 2.03454H15.7113Z" fill="white" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.3744 10.6077C17.1746 11.2844 16.8896 11.9201 16.5227 12.5083C16.1557 13.0965 15.7167 13.6309 15.2057 14.1116C14.6979 14.5923 14.1311 15.0034 13.5119 15.3449C12.8928 15.6864 12.2277 15.9489 11.5168 16.1355C10.8059 16.3221 10.0721 16.4138 9.31531 16.4138C8.55854 16.4138 7.8247 16.3189 7.12034 16.1355C6.41271 15.9489 5.75422 15.6864 5.13505 15.3449C4.51915 15.0034 3.95566 14.5923 3.44787 14.1116C2.94008 13.6309 2.50109 13.0965 2.13745 12.5083C1.7738 11.9201 1.49206 11.2876 1.28895 10.614C1.08911 9.94043 0.987549 9.23206 0.987549 8.49523C0.987549 7.7584 1.08911 7.05952 1.28895 6.37962C1.48879 5.69971 1.77053 5.0704 2.13745 4.48537C2.50109 3.90033 2.93681 3.36905 3.44787 2.88838C3.95566 2.4077 4.51915 1.99659 5.13505 1.65506C5.75095 1.31352 6.41271 1.05105 7.12034 0.864469C7.8247 0.67789 8.55854 0.586182 9.31531 0.586182C10.0721 0.586182 10.8059 0.681052 11.5168 0.864469C12.2277 1.05105 12.8928 1.31352 13.5119 1.65506C14.1311 1.99659 14.6979 2.4077 15.2057 2.88838C15.7135 3.36905 16.1525 3.90033 16.5227 4.48537C16.8896 5.0704 17.1746 5.69971 17.3744 6.37962C17.5743 7.05636 17.6758 7.76156 17.6758 8.49523C17.6758 9.2289 17.5743 9.93094 17.3744 10.6108V10.6077ZM13.4104 6.87611C13.3547 6.31953 13.263 5.78193 13.1385 5.25698C13.0107 4.73203 12.8436 4.2387 12.6372 3.777C12.4276 3.31529 12.172 2.90735 11.8641 2.55633C11.5561 2.20531 11.1925 1.93018 10.7732 1.72779C10.3538 1.52856 9.86896 1.42737 9.31858 1.42737C8.7682 1.42737 8.28662 1.52856 7.87056 1.73412C7.4545 1.93967 7.09086 2.21163 6.78291 2.55633C6.47496 2.90103 6.21942 3.30581 6.01303 3.77067C5.80992 4.23554 5.64284 4.73203 5.51835 5.25698C5.39058 5.78193 5.30212 6.31953 5.24971 6.87611C5.19729 7.43268 5.17109 7.97344 5.17109 8.49523C5.17109 9.01702 5.19729 9.57043 5.24971 10.1238C5.30212 10.6804 5.39058 11.2212 5.51835 11.743C5.64611 12.2679 5.80992 12.7612 6.01303 13.223C6.21615 13.6847 6.47496 14.0894 6.78291 14.4373C7.09086 14.7852 7.4545 15.0603 7.87056 15.2658C8.28662 15.4714 8.7682 15.5726 9.31858 15.5726C9.86896 15.5726 10.3538 15.4714 10.7732 15.2658C11.1925 15.0603 11.5561 14.7852 11.8641 14.4373C12.172 14.0894 12.4308 13.6847 12.6372 13.223C12.8436 12.7612 13.014 12.2679 13.1385 11.743C13.2662 11.218 13.3547 10.6804 13.4104 10.1238C13.4661 9.56727 13.4956 9.02334 13.4956 8.49523C13.4956 7.96712 13.4661 7.43268 13.4104 6.87611Z" fill="white" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6615 16.0817L7.63275 9.1846H6.56147V13.8111C6.56147 14.178 6.58768 14.4784 6.64665 14.7156C6.70235 14.9527 6.80718 15.1393 6.96443 15.2816C7.12168 15.4239 7.34118 15.5188 7.62292 15.5789C7.90467 15.6358 8.27814 15.6643 8.73678 15.6643V16.0849H0.766113V15.6643C1.24114 15.6643 1.62117 15.6358 1.90291 15.5789C2.18465 15.522 2.40087 15.4208 2.54829 15.2721C2.69572 15.1267 2.794 14.9243 2.83659 14.6681C2.88245 14.4151 2.90211 14.0926 2.90211 13.7036V3.29629C2.90211 2.91049 2.87918 2.58792 2.83659 2.33177C2.79072 2.07879 2.69572 1.87639 2.54829 1.72776C2.40087 1.5823 2.18465 1.47794 1.90291 1.42102C1.62117 1.36409 1.24114 1.33563 0.766113 1.33563V0.915039H9.52632C10.4174 0.915039 11.2135 1.01307 11.9113 1.2123C12.6091 1.40837 13.2021 1.68665 13.6836 2.04716C14.1652 2.40451 14.5354 2.83775 14.7877 3.34373C15.0399 3.8497 15.1677 4.41577 15.1677 5.03875C15.1677 5.48464 15.1022 5.91156 14.9679 6.3195C14.8335 6.72745 14.6271 7.10061 14.3421 7.43898C14.0604 7.77735 13.7 8.07145 13.261 8.32127C12.822 8.5711 12.2946 8.764 11.6787 8.8905L16.0817 14.8421C16.1931 15.0002 16.3143 15.1298 16.4486 15.2342C16.583 15.3385 16.7173 15.4239 16.8483 15.4872C16.9794 15.5504 17.1137 15.5979 17.2447 15.6232C17.3758 15.6485 17.497 15.6611 17.6084 15.6611V16.0817H12.6582H12.6615ZM11.22 3.82441C11.1283 3.42911 10.9612 3.07809 10.7254 2.77134C10.4862 2.46143 10.1553 2.21793 9.7327 2.03451C9.31009 1.8511 8.76954 1.75939 8.1176 1.75939H6.56803V8.34341H8.35021C8.92352 8.34341 9.39855 8.2517 9.78185 8.06829C10.1651 7.88487 10.4731 7.64137 10.7057 7.33778C10.9383 7.0342 11.1054 6.68001 11.2069 6.28472C11.3085 5.88626 11.3576 5.47199 11.3576 5.04191C11.3576 4.61183 11.3118 4.2197 11.2168 3.82757L11.22 3.82441Z" fill="white" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.51856 16.0817V15.6611C10.0165 15.6611 10.3998 15.6327 10.6717 15.5757C10.9436 15.5188 11.1336 15.4271 11.2418 15.3006C11.3499 15.1741 11.3859 15.0128 11.3466 14.8168C11.3106 14.6207 11.2319 14.3804 11.114 14.1021L10.1115 11.7683H4.53893L3.88044 13.2641C3.69371 13.672 3.5856 14.0199 3.55283 14.3076C3.52007 14.5954 3.57249 14.8326 3.71009 15.0223C3.84768 15.2121 4.07374 15.3607 4.39152 15.4651C4.70602 15.5694 5.12207 15.6358 5.63314 15.6643V16.0849H0.404541V15.6643C0.673178 15.6137 0.909053 15.5504 1.11872 15.4746C1.32511 15.3987 1.52496 15.2785 1.70842 15.114C1.89515 14.9496 2.07533 14.7282 2.25552 14.4531C2.43242 14.178 2.62244 13.8175 2.82556 13.3716L8.76179 0.586182H8.98456L14.8159 13.3906C15.0158 13.8491 15.2091 14.2254 15.3958 14.5164C15.5826 14.8073 15.766 15.035 15.9527 15.2057C16.1395 15.3734 16.3229 15.4904 16.5097 15.5568C16.6964 15.62 16.8897 15.658 17.0895 15.6643V16.0849H9.52182L9.51856 16.0817ZM7.36946 5.69655L4.95172 10.9461H9.69874L7.36946 5.69655Z" fill="white" />
                            </svg>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.6568 11.5089C15.303 12.4355 14.7919 13.2356 14.117 13.9123C13.4454 14.5891 12.6232 15.1203 11.6534 15.5061C10.6837 15.8888 9.58295 16.0817 8.34788 16.0817H0.501709V15.6611C0.976738 15.6611 1.36004 15.6326 1.64833 15.5757C1.93663 15.5188 2.16268 15.4176 2.31665 15.269C2.4739 15.1235 2.57545 14.9211 2.62787 14.665C2.68029 14.412 2.7065 14.0894 2.7065 13.7004V3.29629C2.7065 2.91049 2.68029 2.58792 2.62787 2.33177C2.57545 2.07879 2.47063 1.87639 2.31665 1.72776C2.1594 1.5823 1.93663 1.47794 1.64833 1.42102C1.36004 1.36409 0.976738 1.33563 0.501709 1.33563V0.915039H8.34788C9.58295 0.915039 10.6837 1.11427 11.6534 1.51272C12.6232 1.91118 13.4454 2.45511 14.117 3.14134C14.7886 3.83073 15.303 4.63397 15.6568 5.55105C16.0106 6.46813 16.1875 7.44846 16.1875 8.48888C16.1875 9.52929 16.0106 10.576 15.6568 11.5026V11.5089ZM11.9122 6.89189C11.85 6.35429 11.7452 5.83566 11.601 5.33601C11.4569 4.83636 11.2669 4.36833 11.031 3.93193C10.7984 3.49552 10.5035 3.11604 10.1497 2.79664C9.7959 2.47724 9.38311 2.22425 8.91136 2.03768C8.43961 1.8511 7.89579 1.75939 7.27989 1.75939H6.36586V13.7036C6.36586 14.004 6.38552 14.257 6.42811 14.4562C6.46742 14.6586 6.54605 14.8168 6.65744 14.9338C6.76882 15.0508 6.91951 15.1361 7.10953 15.1867C7.29954 15.2373 7.54525 15.2626 7.84992 15.2626C8.38392 15.2626 8.85895 15.1741 9.27829 14.9938C9.69435 14.8136 10.058 14.5638 10.3659 14.2475C10.6739 13.9281 10.9327 13.555 11.1391 13.1217C11.3455 12.6916 11.5158 12.2236 11.6469 11.724C11.7779 11.2212 11.8697 10.6962 11.9253 10.1491C11.981 9.59887 12.0105 9.04862 12.0105 8.49837C12.0105 7.94812 11.9778 7.43265 11.9155 6.89505L11.9122 6.89189Z" fill="white" />
                            </svg>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.2771 16.0817V15.6611C9.77506 15.6611 10.1584 15.6327 10.4303 15.5757C10.7022 15.5188 10.8922 15.4271 11.0003 15.3006C11.1084 15.1741 11.1445 15.0128 11.1052 14.8168C11.0691 14.6207 10.9905 14.3804 10.8725 14.1021L9.87007 11.7683H4.29748L3.63899 13.2641C3.45225 13.672 3.34414 14.0199 3.31138 14.3076C3.27862 14.5954 3.33105 14.8326 3.46864 15.0223C3.60624 15.2121 3.83227 15.3607 4.15005 15.4651C4.46455 15.5694 4.88063 15.6358 5.39169 15.6643V16.0849H0.163086V15.6643C0.431723 15.6137 0.667598 15.5504 0.877266 15.4746C1.08366 15.3987 1.28349 15.2785 1.46695 15.114C1.65369 14.9496 1.83389 14.7282 2.01407 14.4531C2.19098 14.178 2.38099 13.8175 2.5841 13.3716L8.51705 0.586182H8.73982L14.5712 13.3906C14.7711 13.8491 14.9643 14.2254 15.1511 14.5164C15.3378 14.8073 15.5213 15.035 15.708 15.2057C15.8948 15.3734 16.0782 15.4904 16.265 15.5568C16.4517 15.62 16.645 15.658 16.8448 15.6643V16.0849H9.2771V16.0817ZM7.12472 5.69655L4.70699 10.9461H9.454L7.12472 5.69655Z" fill="white" />
                            </svg>

                        </div>
                    </a>

                </div>

                <div class="hidden lg:flex lg:gap-x-5 lg:justify-end">

                    <a href="brands.php?p=brands"   >{{ __('Brands We Trust') }}</a>
                    <a href="vouchers.php?p=vouchers" >{{ __('Vouchers & Promotions') }}</a>
                    <a href="blog.php?p=blog"   >{{ __('Blog') }}</a>
                    <a href="contact.php?p=contact"  >{{ __('Contact') }}</a>
                </div>

            </nav>






            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-10"></div>
                <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <div class="-mx-3">
                                    <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                                        Product
                                        <!--
                                          Expand/collapse icon, toggle classes based on menu open state.

                                          Open: "rotate-180", Closed: ""
                                        -->
                                        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <!-- 'Product' sub-menu, show/hide based on menu state. -->
                                    <div class="mt-2 space-y-2" id="disclosure-1">
                                        <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Analytics</a>
                                        <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Engagement</a>
                                        <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Security</a>
                                        <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Integrations</a>
                                        <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Automations</a>
                                        <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Watch demo</a>
                                        <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Contact sales</a>
                                    </div>
                                </div>
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    @if(isset($headerSettings) && $headerSettings != null && $headerSettings->heading && trim($headerSettings->heading) !='')
        <div class="flex flex-col flex-grow justify-center text-center bg-cover bg-center items-center h-full ">
            <p class="font-bold text-white  {{ request()->routeIs('page.home') ? "lg:text-5xl text-4xl   wellcome":"text-6xl font-Cirka   mb-7 lg:mr-10" }} ">{{ $headerSettings->heading }}</p>
        </div>
    @endif




</div>
