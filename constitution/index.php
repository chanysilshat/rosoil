<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизельное топливо");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"banner_page",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => 166,
		"FIELD_CODE" => array("", "TITLE_RU"),
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("", "TITLE_RU"),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?>

<main class="main">  
            <div class="constitution">
             
                <div class="constitution-title">
                    <div class="constitution-block">
                        <div class="container">
                            <h1>
                                <?=GetMessage("CONSTITUTION")?>
                            </h1>
                            <div class="constitution-block-text">
                                <span>
                                    <?=GetMessage("CONSTITUTION-TEXT")?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="constitution-values">
                        <div class="constitution-values-text">
                            <?=GetMessage("VALUE")?>
                        </div>
                        <div class="constitution-values-wrapper">
                            <div class="constitution-values-block">
                                <div class="constitution-values-item">
                                    <div class="constitution-values-cvg">
                                        <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.9996 9.90001C31.6868 9.90001 30.4277 10.4215 29.4994 11.3498C28.5711 12.2781 28.0496 13.5372 28.0496 14.85C28.0496 16.1628 28.5711 17.4219 29.4994 18.3502C30.4277 19.2785 31.6868 19.8 32.9996 19.8C34.3124 19.8 35.5715 19.2785 36.4998 18.3502C37.4281 17.4219 37.9496 16.1628 37.9496 14.85C37.9496 13.5372 37.4281 12.2781 36.4998 11.3498C35.5715 10.4215 34.3124 9.90001 32.9996 9.90001ZM24.7496 14.85C24.7496 12.662 25.6188 10.5636 27.166 9.01638C28.7132 7.4692 30.8116 6.60001 32.9996 6.60001C35.1876 6.60001 37.2861 7.4692 38.8332 9.01638C40.3804 10.5636 41.2496 12.662 41.2496 14.85C41.2496 17.038 40.3804 19.1365 38.8332 20.6836C37.2861 22.2308 35.1876 23.1 32.9996 23.1C30.8116 23.1 28.7132 22.2308 27.166 20.6836C25.6188 19.1365 24.7496 17.038 24.7496 14.85ZM51.1496 13.2C50.2744 13.2 49.435 13.5477 48.8162 14.1666C48.1973 14.7854 47.8496 15.6248 47.8496 16.5C47.8496 17.3752 48.1973 18.2146 48.8162 18.8335C49.435 19.4523 50.2744 19.8 51.1496 19.8C52.0248 19.8 52.8642 19.4523 53.4831 18.8335C54.1019 18.2146 54.4496 17.3752 54.4496 16.5C54.4496 15.6248 54.1019 14.7854 53.4831 14.1666C52.8642 13.5477 52.0248 13.2 51.1496 13.2V13.2ZM44.5496 16.5C44.5496 14.7496 45.245 13.0708 46.4827 11.8331C47.7204 10.5954 49.3992 9.90001 51.1496 9.90001C52.9 9.90001 54.5788 10.5954 55.8165 11.8331C57.0543 13.0708 57.7496 14.7496 57.7496 16.5C57.7496 18.2504 57.0543 19.9292 55.8165 21.1669C54.5788 22.4047 52.9 23.1 51.1496 23.1C49.3992 23.1 47.7204 22.4047 46.4827 21.1669C45.245 19.9292 44.5496 18.2504 44.5496 16.5ZM11.5496 16.5C11.5496 15.6248 11.8973 14.7854 12.5162 14.1666C13.135 13.5477 13.9744 13.2 14.8496 13.2C15.7248 13.2 16.5642 13.5477 17.1831 14.1666C17.8019 14.7854 18.1496 15.6248 18.1496 16.5C18.1496 17.3752 17.8019 18.2146 17.1831 18.8335C16.5642 19.4523 15.7248 19.8 14.8496 19.8C13.9744 19.8 13.135 19.4523 12.5162 18.8335C11.8973 18.2146 11.5496 17.3752 11.5496 16.5ZM14.8496 9.90001C13.0992 9.90001 11.4204 10.5954 10.1827 11.8331C8.94496 13.0708 8.24961 14.7496 8.24961 16.5C8.24961 18.2504 8.94496 19.9292 10.1827 21.1669C11.4204 22.4047 13.0992 23.1 14.8496 23.1C16.6 23.1 18.2788 22.4047 19.5165 21.1669C20.7543 19.9292 21.4496 18.2504 21.4496 16.5C21.4496 14.7496 20.7543 13.0708 19.5165 11.8331C18.2788 10.5954 16.6 9.90001 14.8496 9.90001ZM16.8296 49.4934C15.9361 49.5381 15.0428 49.4007 14.204 49.0896C13.3652 48.7784 12.5984 48.2999 11.9503 47.6832C11.3021 47.0666 10.7861 46.3246 10.4336 45.5023C10.0811 44.68 9.89938 43.7947 9.89961 42.9V30.525C9.89961 30.3062 9.98653 30.0964 10.1412 29.9416C10.296 29.7869 10.5058 29.7 10.7246 29.7H16.5458C16.6778 28.4889 17.1068 27.3636 17.7503 26.4H10.7246C8.44761 26.4 6.59961 28.248 6.59961 30.525V42.9C6.59946 44.3128 6.90169 45.7093 7.48599 46.9956C8.0703 48.2819 8.92315 49.4282 9.98724 50.3576C11.0513 51.2869 12.302 51.9778 13.6552 52.3837C15.0085 52.7896 16.4329 52.9012 17.8328 52.7109C17.3887 51.6758 17.0525 50.5976 16.8296 49.4934V49.4934ZM48.1664 52.7109C49.5663 52.9012 50.9908 52.7896 52.344 52.3837C53.6972 51.9778 54.9479 51.2869 56.012 50.3576C57.0761 49.4282 57.9289 48.2819 58.5132 46.9956C59.0975 45.7093 59.3998 44.3128 59.3996 42.9V30.525C59.3996 28.248 57.5516 26.4 55.2746 26.4H48.2489C48.8957 27.3636 49.3214 28.4889 49.4534 29.7H55.2746C55.4934 29.7 55.7033 29.7869 55.858 29.9416C56.0127 30.0964 56.0996 30.3062 56.0996 30.525V42.9C56.0998 43.7947 55.9182 44.68 55.5656 45.5023C55.2131 46.3246 54.6971 47.0666 54.0489 47.6832C53.4008 48.2999 52.634 48.7784 51.7952 49.0896C50.9564 49.4007 50.0631 49.5381 49.1696 49.4934C48.9467 50.5975 48.6105 51.6757 48.1664 52.7109V52.7109ZM23.9246 26.4C21.6476 26.4 19.7996 28.248 19.7996 30.525V46.2C19.7996 49.7009 21.1903 53.0583 23.6658 55.5338C26.1413 58.0093 29.4988 59.4 32.9996 59.4C36.5005 59.4 39.8579 58.0093 42.3334 55.5338C44.8089 53.0583 46.1996 49.7009 46.1996 46.2V30.525C46.1996 28.248 44.3516 26.4 42.0746 26.4H23.9246ZM23.0996 30.525C23.0996 30.3062 23.1865 30.0964 23.3412 29.9416C23.496 29.7869 23.7058 29.7 23.9246 29.7H42.0746C42.2934 29.7 42.5033 29.7869 42.658 29.9416C42.8127 30.0964 42.8996 30.3062 42.8996 30.525V46.2C42.8996 48.8256 41.8566 51.3438 40 53.2004C38.1434 55.057 35.6253 56.1 32.9996 56.1C30.374 56.1 27.8559 55.057 25.9993 53.2004C24.1426 51.3438 23.0996 48.8256 23.0996 46.2V30.525Z" fill="black"/>
                                        </svg>
                                    </div>
                                    <div class="constitution-text">
                                        <span>
                                            <?=GetMessage("STYLE")?>
                                        </span>   
                                    </div>
                                </div>
                                <div class="constitution-values-item">
                                    <div class="constitution-values-cvg">
                                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28 11.625C22.8223 11.625 18.625 15.8223 18.625 21C18.625 26.1777 22.8223 30.375 28 30.375C33.1777 30.375 37.375 26.1777 37.375 21C37.375 15.8223 33.1777 11.625 28 11.625ZM14.625 21C14.625 13.6132 20.6132 7.625 28 7.625C35.3868 7.625 41.375 13.6132 41.375 21C41.375 28.3868 35.3868 34.375 28 34.375C20.6132 34.375 14.625 28.3868 14.625 21Z" fill="black"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28 34.375C17.7929 34.375 11.625 42.1651 11.625 49.875C11.625 50.9796 10.7296 51.875 9.625 51.875C8.52043 51.875 7.625 50.9796 7.625 49.875C7.625 40.0849 15.4571 30.375 28 30.375C40.5429 30.375 48.375 40.0849 48.375 49.875C48.375 50.9796 47.4796 51.875 46.375 51.875C45.2704 51.875 44.375 50.9796 44.375 49.875C44.375 42.1651 38.2071 34.375 28 34.375Z" fill="black"/>
                                        </svg>
                                    </div>
                                    <div class="constitution-text">
                                        <?=GetMessage("PERSONALITY")?>
                                    </div>
                                </div>
                                <div class="constitution-values-item">
                                    <div class="constitution-values-cvg">
                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M60.4257 26.1805L54.4921 14.7977C54.0784 14.0099 53.3736 13.4148 52.5278 13.1389C51.6819 12.8629 50.7617 12.928 49.9632 13.3203L44.2233 16.2024H40.0335L31.9444 12.5453C31.2096 12.1989 30.3721 12.1385 29.5952 12.3758L17.6311 15.8633L12.0366 13.0539C11.237 12.6679 10.3191 12.6061 9.47492 12.8815C8.63079 13.1568 7.92586 13.748 7.50768 14.5313L1.57409 25.9383C1.35852 26.3352 1.22566 26.7718 1.18352 27.2215C1.14138 27.6712 1.19085 28.1249 1.32893 28.5549C1.46701 28.985 1.69083 29.3827 1.98689 29.7238C2.28295 30.065 2.64509 30.3426 3.05143 30.5399L8.91237 33.4703L22.0389 43.7149C22.4049 44.0186 22.8358 44.234 23.2983 44.3445L37.3452 47.8563C37.606 47.9243 37.8749 47.9569 38.1444 47.9531C39.0431 47.9506 39.9046 47.5938 40.5421 46.9602L49.4546 38.0477H49.5514L53.2327 33.6641L58.9483 30.8063C59.3534 30.6013 59.7139 30.3181 60.0091 29.9731C60.3042 29.6281 60.5281 29.2281 60.6678 28.7961C60.8035 28.3659 60.8519 27.913 60.8103 27.4639C60.7687 27.0148 60.638 26.5784 60.4257 26.1805V26.1805ZM48.1952 35.0445L38.6288 28.0938C38.3769 27.9143 38.0743 27.8198 37.765 27.8242C37.4558 27.8286 37.156 27.9315 36.9092 28.118L33.8092 30.443C32.7177 31.2567 31.3926 31.6963 30.0311 31.6963C28.6696 31.6963 27.3445 31.2567 26.253 30.443L24.9452 29.45C24.8838 29.4118 24.8336 29.3581 24.7996 29.2943C24.7656 29.2306 24.749 29.159 24.7514 29.0867C24.7457 29.019 24.7558 28.9509 24.781 28.8879C24.8063 28.8248 24.8459 28.7685 24.8967 28.7234L34.3663 19.2297C34.4636 19.1545 34.5824 19.1121 34.7053 19.1086H43.6905L50.5686 32.2836L48.1952 35.0445ZM4.11706 27.6578C4.09088 27.5958 4.07944 27.5285 4.08365 27.4612C4.08785 27.394 4.10757 27.3286 4.14128 27.2703L10.0991 15.8633C10.143 15.7872 10.2067 15.7244 10.2835 15.6818C10.3603 15.6391 10.4472 15.6181 10.535 15.6211C10.6034 15.6115 10.6729 15.6289 10.7288 15.6695L15.4757 18.0188L9.05768 30.2977L4.35924 27.9242C4.30133 27.9011 4.24944 27.8651 4.20749 27.8189C4.16553 27.7728 4.13461 27.7177 4.11706 27.6578V27.6578ZM38.5077 44.9016C38.4479 44.9596 38.3741 45.0013 38.2935 45.0225C38.2129 45.0437 38.1282 45.0438 38.0475 45.0227L24.0007 41.5352L23.8311 41.4383L11.528 31.8234L18.4061 18.6484L30.4186 15.1609C30.5314 15.1335 30.6499 15.142 30.7577 15.1852L33.4944 16.4203C33.0496 16.5941 32.6456 16.8579 32.3077 17.1953L22.8382 26.6649C22.4909 27.0064 22.2219 27.4192 22.0497 27.8748C21.8774 28.3304 21.8061 28.8179 21.8407 29.3038C21.8752 29.7896 22.0148 30.2621 22.2497 30.6888C22.4846 31.1155 22.8093 31.4861 23.2014 31.775L24.5092 32.768C26.1085 33.948 28.0437 34.5847 30.0311 34.5847C32.0186 34.5847 33.9538 33.948 35.553 32.768L37.8053 31.0727L46.2092 37.2L38.5077 44.9016ZM57.8827 27.9C57.8667 27.9635 57.8367 28.0226 57.7948 28.073C57.7528 28.1233 57.7001 28.1635 57.6405 28.1906L52.9421 30.5399L46.5241 18.2852L51.271 15.9117C51.3839 15.8606 51.5121 15.8547 51.6292 15.8952C51.7464 15.9358 51.8435 16.0197 51.9007 16.1297L57.8585 27.5367C57.8919 27.5907 57.9117 27.652 57.9159 27.7153C57.9201 27.7787 57.9087 27.8421 57.8827 27.9V27.9ZM28.5296 51.9008C28.45 52.2148 28.2693 52.494 28.0155 52.6953C27.7617 52.8966 27.4488 53.0089 27.1249 53.0149L26.7616 52.9664L19.4717 51.1258C18.9511 51.0022 18.4688 50.7527 18.0671 50.3992L12.6178 45.6524C12.4469 45.5376 12.3024 45.3879 12.1937 45.213C12.085 45.0382 12.0148 44.8423 11.9875 44.6382C11.9603 44.4342 11.9767 44.2267 12.0357 44.0295C12.0947 43.8322 12.1949 43.6498 12.3298 43.4943C12.4646 43.3387 12.6309 43.2136 12.8177 43.1271C13.0046 43.0407 13.2076 42.9949 13.4135 42.9929C13.6193 42.9909 13.8232 43.0326 14.0117 43.1153C14.2002 43.198 14.369 43.3198 14.5069 43.4727L19.9803 48.2195C20.0368 48.266 20.103 48.2992 20.1741 48.3164L27.4882 50.1328C27.8604 50.2297 28.179 50.4702 28.3742 50.8016C28.5694 51.133 28.6253 51.5283 28.5296 51.9008V51.9008Z" fill="black"/>
                                        </svg>
                                    </div>
                                    <div class="constitution-text">
                                        <span>
                                            <?=GetMessage("CONFIDENCE")?>
                                        </span>   
                                    </div>
                                </div>
                            </div>
    

                        </div>
                    </div>
                </div>
                <div class="ethical-justifications">
                    <div class="constitution-values-text">
                        <?=GetMessage("ETHNIC")?>
                    </div>
                    <div class="ethical-justifications-block">
                            <div class="honesty block">
                                <div class="honesty-namber">
                                    01
                                </div>
                                <div class="honesty-text">
                                    <?=GetMessage("HONESTY")?>
                                </div>
                                <div class="constitution-block-text">
                                    <span>
                                        <?=GetMessage("HONESTY-TEXT")?>
                                    </span>
                                </div>
                            </div>
                            <div class="justice block">
                                <div class="honesty-namber">
                                    02
                                </div>
                                <div class="honesty-text">
                                    <?=GetMessage("JUSTICE")?>
                                </div>
                                <div class="constitution-block-text">
                                    <span>
                                        <?=GetMessage("JUSTICE-TEXT")?>
                                    </span>
                                </div>
                            </div>
                            <div class="objectivity block">
                                <div class="honesty-namber">
                                    03
                                </div>
                                <div class="honesty-text">
                                    <?=GetMessage("OBJECTIVITY")?> 
                                </div>
                                <div class="constitution-block-text">
                                    <span>
                                        <?=GetMessage("OBJECTIVITY-TEXT")?> 
                                    </span>
                                </div>
                            </div>
                            <div class="responsibility block">
                                <div class="honesty-namber">
                                    04
                                </div>
                                <div class="honesty-text">
                                    <?=GetMessage("A-RESPONSIBILITY")?> 
                                </div>
                                <div class="constitution-block-text">
                                    <span>
                                        <?=GetMessage("A-RESPONSIBILITY-TEXT")?> 
                                    </span>
                                </div>
                            </div>
                    </div>
                    <div class="ethical-justifications-mobile">
                        <div class="ethical-justifications-wrapper">
                            <div class="honesty block">
                                <div class="honesty-namber">
                                    01
                                </div>
                                <div class="honesty-text">
                                    Честность:
                                </div>
                                <div class="constitution-block-text">
                                    <span>
                                        поведение, основанное на справедливости и прямоте
                                    </span>
                                </div>
                            </div>
                            <div class="justice block">
                                <div class="honesty-namber">
                                    02
                                </div>
                                <div class="honesty-text">
                                    Справедливость:
                                </div>
                                <div class="constitution-block-text">
                                    <span>
                                        беспристрастность, требующая открытых взглядов, толерантности и принятия других точек зрения...
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="ethical-justifications-wrapper ethical-justifications-second">
                            <div class="objectivity block">
                                <div class="honesty-namber">
                                    03
                                </div>
                                <div class="honesty-text">
                                    Объективность: 
                                </div>
                                <div class="constitution-block-text">
                                    <span>
                                        Объективность: суждение, основанное не на личных пристрастиях, а на установленном набо...
                                    </span>
                                </div>
                            </div>
                            <div class="responsibility block">
                                <div class="honesty-namber">
                                    04
                                </div>
                                <div class="honesty-text">
                                    Ответственность:
                                </div>
                                <div class="constitution-block-text">
                                    <span>
                                        Ответственность: исполнение того, что обещано, в полном объеме, в установленные...
                                    </span>
                                </div>
                            </div>
    
                            

                        </div>

                </div>

                </div>
                <div class="standards">
                    <div class="constitution-values-text">
                        <?=GetMessage("STANDARDS")?> 
                    </div>
                    <div class="standards-block">
                        <div class="standards-block-wrapper">
                            <div class="standards-block-item efficiency">
                                <div class="privacy-img">
                                    <img src="/img/efficiency.png">
                                </div>
                                <div class="professionalism-text">
                                    <?=GetMessage("EFFICIENCY")?> 
                                </div>
                            </div>
                            <div class="standards-block-item integrity">
                                <div class="privacy-img">
                                    <img src="/img/integrity.png">
                                </div>
                                <div class="professionalism-text">
                                    <?=GetMessage("WHOLE")?>
                                </div>
                            </div>
                            <div class="standards-block-item reliability">
                                <div class="privacy-img">
                                    <img src="/img/reliability.png">
                                </div>
                                <div class="professionalism-text">
                                    <?=GetMessage("RELIABILITY")?>
                                </div>
                            </div>
                            <div class="standards-block-item professionalism">
                                <div class="privacy-img">
                                    <img src="/img/professionalism.png">
                                </div>
                                <div class="professionalism-text">
                                    <?=GetMessage("PROFESSIONALISM")?>
                                </div>
                            </div>

                            <div class="standards-block-item privacy">
                                <div class="privacy-img">
                                    <img src="/img/privacy.png">
                                </div>
                                <div class="professionalism-text">
                                    <?=GetMessage("CONFIDENTIALITY")?>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="management-principles">
                    <div class="management-principles-container">
                        <div class="constitution-values-text management-principles-title">
                            <?=GetMessage("CONTROL-PRINCIPLE")?>
                        </div>
                        <div class="management-principles-block">
                            <div class="management-principles-item action-orientation">
                                <div class="action-orientation-item">
                                    <div class="management-title">
                                        <?=GetMessage("ORIENTATION")?>
                                    </div>
                                    <div class="management-text">
                                        <?=GetMessage("ORIENTATION-TEXT")?>
                                    </div>
                                </div>
                                <div class="action-orientation-block"><img src="/img/management.jpg" alt="">
                                </div>
                            </div>
                        
                            <div class="management-principles-item partner">
                                <div class="action-orientation-block"><img src="/img/management.jpg" alt="">
                                </div>
                                <div class="action-orientation-item partner-item">
                                    <div class="management-title">
                                        <?=GetMessage("PROXIMITY")?>
                                    </div>
                                    <div class="management-text">
                                        <?=GetMessage("PROXIMITY-TEXT")?>
                                    </div>
                                </div>
                            </div> 
                            <div class="management-principles-item autonomy">
                                <div class="action-orientation-item autonomy-item">
                                    <div class="management-title">
                                        <?=GetMessage("AUTONOMY")?>
                                    </div>
                                    <div class="management-text">
                                        <?=GetMessage("AUTONOMY-TEXT")?>
                                    </div>
                                </div>
                                <div class="action-orientation-block"><img src="/img/management.jpg" alt="">
                                </div>
                            </div>  
                            <div class="management-principles-item basis-of-efficiency">
                                <div class="action-orientation-block"><img src="/img/management.jpg" alt="">
                                </div>
                                <div class="action-orientation-item basis-of-efficiency-item">
                                    <div class="management-title">
                                        <?=GetMessage("PEOPLE")?>
                                    </div>
                                    <div class="management-text">
                                        <?=GetMessage("PEOPLE-TEXT")?>
                                    </div>
                                </div>
                            </div>
                            <div class="management-principles-item local-control">
                                <div class="action-orientation-item local-control-item">
                                    <div class="management-title">
                                        <?=GetMessage("LOCAL")?>
                                    </div>
                                    <div class="management-text">
                                        <?=GetMessage("LOCAL-TEXT")?> 
                                    </div>
                                </div>
                                <div class="action-orientation-block"><img src="/img/management.jpg" alt="">
                                </div>
                            </div>
                            <div class="management-principles-item partner">
                                <div class="action-orientation-block"><img src="/img/management.jpg" alt="">
                                </div>
                                <div class="action-orientation-item partner-item">
                                    <div class="management-title">
                                        <?=GetMessage("LOYALTY")?>
                                    </div>
                                    <div class="management-text">
                                        <?=GetMessage("LOYALTY-TEXT")?>
                                    </div>
                                </div>
                            </div> 
                            <div class="management-principles-item autonomy">
                                <div class="action-orientation-item autonomy-item">
                                    <div class="management-title">
                                        <?=GetMessage("SIMPLE")?>
                                    </div>
                                    <div class="management-text">
                                        <?=GetMessage("SIMPLE-TEXT")?>
                                    </div>
                                </div>
                                <div class="action-orientation-block"><img src="/img/management.jpg" alt="">
                                </div>
                            </div>  
                            <div class="management-principles-item basis-of-efficiency">
                                <div class="action-orientation-block"><img src="/img/management.jpg" alt="">
                                </div>
                                <div class="action-orientation-item basis-of-efficiency-item">
                                    <div class="management-title">
                                        <?=GetMessage("COMBINATION")?>
                                    </div>
                                    <div class="management-text">
                                        <?=GetMessage("COMBINATION-TEXT")?>
                                    </div>
                                </div>
                            </div>
                        </div>
     
    

                    </div>
                </div>
            </div>
              
        </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>