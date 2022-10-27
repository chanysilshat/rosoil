<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");  
CModule::IncludeModule("iblock");
$filter = [
    "IBLOCK_ID" => 29,
    "SECTION_ID" => $_REQUEST["SECTION_ID"],
    "INCLUDE_SUBSECTIONS" => "Y",
    "ACTIVE" => "Y",
];
$select = [
    "NAME", 
    "PROPERTY_FILE",
    "PREVIEW_PICTURE"
];
$res = CIBlockElement::GetList([], $filter, false, false, []);
while ($result = $res->Fetch()):?>
   <div class="passpotrs-document">
        <span>
            <?=$result["NAME"]?>
        </span>
        <div class="passports-img">
            <img src="<?=CFile::GetPath($result["PREVIEW_PICTURE"])?>">
        </div>
        <a href="<?=CFile::GetPath($result["PROPERTY_FILE_VALUE"])?>" download>
            <div class="passpotrs-download">
                <span>
                    скачать
                </span>
                <div class="passpotrs-svg">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.8357 10.5882H21.4286V1.76471C21.4286 0.794118 20.4643 0 19.2857 0H10.7143C9.53571 0 8.57143 0.794118 8.57143 1.76471V10.5882H5.16429C3.25714 10.5882 2.29286 12.4941 3.64286 13.6059L13.4786 21.7059C14.3143 22.3941 15.6643 22.3941 16.5 21.7059L26.3357 13.6059C27.6857 12.4941 26.7429 10.5882 24.8357 10.5882ZM0 28.2353C0 29.2059 0.964286 30 2.14286 30H27.8571C29.0357 30 30 29.2059 30 28.2353C30 27.2647 29.0357 26.4706 27.8571 26.4706H2.14286C0.964286 26.4706 0 27.2647 0 28.2353Z" fill="#90CAF9"/>
                    </svg>
                </div>
            </div>
        </a>

    </div>
<?endwhile?>
