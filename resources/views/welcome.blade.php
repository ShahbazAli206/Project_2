<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/margins.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  
    <script src="https://www.youtube.com/iframe_api"></script>

</head>

<body class="">
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebardiv">
                <div class="text-center">
                    <img src="assets/images/logo.png" alt="" class="mb-44">
                </div>
                <ul class="list-unstyled components">
                    <li>
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_860)">
                            <path d="M12.3333 10.6667H2.33325C1.04663 10.6667 0 9.62012 0 8.33325V2.33325C0 1.04663 1.04663 0 2.33325 0H12.3333C13.6201 0 14.6667 1.04663 14.6667 2.33325V8.33325C14.6667 9.62012 13.6201 10.6667 12.3333 10.6667ZM2.33325 2C2.14941 2 2 2.14941 2 2.33325V8.33325C2 8.51733 2.14941 8.66675 2.33325 8.66675H12.3333C12.5173 8.66675 12.6667 8.51733 12.6667 8.33325V2.33325C12.6667 2.14941 12.5173 2 12.3333 2H2.33325Z" fill="white"/>
                            <path d="M12.3333 31.9998H2.33325C1.04663 31.9998 0 30.9531 0 29.6665V15.6665C0 14.3796 1.04663 13.333 2.33325 13.333H12.3333C13.6201 13.333 14.6667 14.3796 14.6667 15.6665V29.6665C14.6667 30.9531 13.6201 31.9998 12.3333 31.9998ZM2.33325 15.333C2.14941 15.333 2 15.4824 2 15.6665V29.6665C2 29.8503 2.14941 29.9998 2.33325 29.9998H12.3333C12.5173 29.9998 12.6667 29.8503 12.6667 29.6665V15.6665C12.6667 15.4824 12.5173 15.333 12.3333 15.333H2.33325Z" fill="white"/>
                            <path d="M29.6655 31.9998H19.6655C18.3787 31.9998 17.332 30.9531 17.332 29.6665V23.6665C17.332 22.3796 18.3787 21.333 19.6655 21.333H29.6655C30.9521 21.333 31.9988 22.3796 31.9988 23.6665V29.6665C31.9988 30.9531 30.9521 31.9998 29.6655 31.9998ZM19.6655 23.333C19.4814 23.333 19.332 23.4824 19.332 23.6665V29.6665C19.332 29.8503 19.4814 29.9998 19.6655 29.9998H29.6655C29.8494 29.9998 29.9988 29.8503 29.9988 29.6665V23.6665C29.9988 23.4824 29.8494 23.333 29.6655 23.333H19.6655Z" fill="white"/>
                            <path d="M29.6655 18.6667H19.6655C18.3787 18.6667 17.332 17.6201 17.332 16.3333V2.33325C17.332 1.04663 18.3787 0 19.6655 0H29.6655C30.9521 0 31.9988 1.04663 31.9988 2.33325V16.3333C31.9988 17.6201 30.9521 18.6667 29.6655 18.6667ZM19.6655 2C19.4814 2 19.332 2.14941 19.332 2.33325V16.3333C19.332 16.5173 19.4814 16.6667 19.6655 16.6667H29.6655C29.8494 16.6667 29.9988 16.5173 29.9988 16.3333V2.33325C29.9988 2.14941 29.8494 2 29.6655 2H19.6655Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_1_860">
                            <rect width="32" height="32" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>


                        <a href="{{route('about')}}">Dashboard</a>
                    </li>
                    <li class="">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.2164 30.4866H7.78399C7.66931 30.4866 7.55932 30.441 7.47822 30.3599C7.39712 30.2788 7.35156 30.1688 7.35156 30.0542V4.10821C7.35156 3.99353 7.39712 3.88353 7.47822 3.80244C7.55932 3.72134 7.66931 3.67578 7.78399 3.67578H24.2164C24.3311 3.67578 24.4411 3.72134 24.5222 3.80244C24.6033 3.88353 24.6489 3.99353 24.6489 4.10821V30.0542C24.6489 30.1688 24.6033 30.2788 24.5222 30.3599C24.4411 30.441 24.3311 30.4866 24.2164 30.4866ZM8.21643 29.6217H23.784V4.54065H8.21643V29.6217Z" fill="white"/>
                            <path d="M20.7584 4.5407H11.2449C11.1302 4.5407 11.0203 4.49514 10.9392 4.41404C10.8581 4.33295 10.8125 4.22295 10.8125 4.10827V1.9461C10.8125 1.83142 10.8581 1.72143 10.9392 1.64033C11.0203 1.55923 11.1302 1.51367 11.2449 1.51367H20.7584C20.8731 1.51367 20.9831 1.55923 21.0642 1.64033C21.1453 1.72143 21.1909 1.83142 21.1909 1.9461V4.10827C21.1909 4.22295 21.1453 4.33295 21.0642 4.41404C20.9831 4.49514 20.8731 4.5407 20.7584 4.5407ZM11.6774 3.67583H20.326V2.37854H11.6774V3.67583Z" fill="white"/>
                            <path d="M30.7041 30.4864H24.2176C24.1029 30.4864 23.9929 30.4408 23.9118 30.3597C23.8307 30.2786 23.7852 30.1686 23.7852 30.0539V9.29718C23.7852 9.18249 23.8307 9.0725 23.9118 8.9914C23.9929 8.91031 24.1029 8.86475 24.2176 8.86475H30.7041C30.8188 8.86475 30.9288 8.91031 31.0099 8.9914C31.0909 9.0725 31.1365 9.18249 31.1365 9.29718V30.0539C31.1365 30.1686 31.0909 30.2786 31.0099 30.3597C30.9288 30.4408 30.8188 30.4864 30.7041 30.4864ZM24.65 29.6215H30.2716V9.72961H24.65V29.6215Z" fill="white"/>
                            <path d="M7.7822 30.4864H1.29571C1.18103 30.4864 1.07103 30.4408 0.989938 30.3597C0.908841 30.2786 0.863281 30.1686 0.863281 30.0539V9.29718C0.863281 9.18249 0.908841 9.0725 0.989938 8.9914C1.07103 8.91031 1.18103 8.86475 1.29571 8.86475H7.7822C7.89689 8.86475 8.00688 8.91031 8.08798 8.9914C8.16907 9.0725 8.21463 9.18249 8.21463 9.29718V30.0539C8.21463 30.1686 8.16907 30.2786 8.08798 30.3597C8.00688 30.4408 7.89689 30.4864 7.7822 30.4864ZM1.72815 29.6215H7.34977V9.72961H1.72815V29.6215Z" fill="white"/>
                            <path d="M20.4332 10.2702H18.5953C18.366 10.2702 18.146 10.1791 17.9838 10.0169C17.8216 9.8547 17.7305 9.63472 17.7305 9.40534V7.5675C17.7305 7.33813 17.8216 7.11814 17.9838 6.95595C18.146 6.79376 18.366 6.70264 18.5953 6.70264H20.4332C20.6625 6.70264 20.8825 6.79376 21.0447 6.95595C21.2069 7.11814 21.298 7.33813 21.298 7.5675V9.40534C21.298 9.63472 21.2069 9.8547 21.0447 10.0169C20.8825 10.1791 20.6625 10.2702 20.4332 10.2702ZM18.5953 7.5675V9.40534H20.4332V7.5675H18.5953Z" fill="white"/>
                            <path d="M13.4058 10.2702H11.568C11.3386 10.2702 11.1186 10.1791 10.9564 10.0169C10.7942 9.8547 10.7031 9.63472 10.7031 9.40534V7.5675C10.7031 7.33813 10.7942 7.11814 10.9564 6.95595C11.1186 6.79376 11.3386 6.70264 11.568 6.70264H13.4058C13.6352 6.70264 13.8552 6.79376 14.0174 6.95595C14.1796 7.11814 14.2707 7.33813 14.2707 7.5675V9.40534C14.2707 9.63472 14.1796 9.8547 14.0174 10.0169C13.8552 10.1791 13.6352 10.2702 13.4058 10.2702ZM13.4058 7.5675H11.568V9.40534H13.4058V7.5675Z" fill="white"/>
                            <path d="M20.4332 15.6218H18.5953C18.366 15.6218 18.146 15.5306 17.9838 15.3685C17.8216 15.2063 17.7305 14.9863 17.7305 14.7569V12.9191C17.7305 12.6897 17.8216 12.4697 17.9838 12.3075C18.146 12.1453 18.366 12.0542 18.5953 12.0542H20.4332C20.6625 12.0542 20.8825 12.1453 21.0447 12.3075C21.2069 12.4697 21.298 12.6897 21.298 12.9191V14.7569C21.298 14.9863 21.2069 15.2063 21.0447 15.3685C20.8825 15.5306 20.6625 15.6218 20.4332 15.6218ZM18.5953 12.9191V14.7569H20.4332V12.9191H18.5953Z" fill="white"/>
                            <path d="M13.4058 15.6218H11.568C11.3386 15.6218 11.1186 15.5306 10.9564 15.3685C10.7942 15.2063 10.7031 14.9863 10.7031 14.7569V12.9191C10.7031 12.6897 10.7942 12.4697 10.9564 12.3075C11.1186 12.1453 11.3386 12.0542 11.568 12.0542H13.4058C13.6352 12.0542 13.8552 12.1453 14.0174 12.3075C14.1796 12.4697 14.2707 12.6897 14.2707 12.9191V14.7569C14.2707 14.9863 14.1796 15.2063 14.0174 15.3685C13.8552 15.5306 13.6352 15.6218 13.4058 15.6218ZM13.4058 12.9186H11.568V14.7565H13.4058V12.9186Z" fill="white"/>
                            <path d="M20.4332 20.9728H18.5953C18.366 20.9728 18.146 20.8817 17.9838 20.7195C17.8216 20.5573 17.7305 20.3374 17.7305 20.108V18.2701C17.7305 18.0408 17.8216 17.8208 17.9838 17.6586C18.146 17.4964 18.366 17.4053 18.5953 17.4053H20.4332C20.6625 17.4053 20.8825 17.4964 21.0447 17.6586C21.2069 17.8208 21.298 18.0408 21.298 18.2701V20.108C21.298 20.3374 21.2069 20.5573 21.0447 20.7195C20.8825 20.8817 20.6625 20.9728 20.4332 20.9728ZM18.5953 18.2701V20.108H20.4332V18.2701H18.5953Z" fill="white"/>
                            <path d="M13.7027 20.9728H11.8649C11.6355 20.9728 11.4155 20.8817 11.2533 20.7195C11.0911 20.5573 11 20.3374 11 20.108V18.2701C11 18.0408 11.0911 17.8208 11.2533 17.6586C11.4155 17.4964 11.6355 17.4053 11.8649 17.4053H13.7027C13.9321 17.4053 14.1521 17.4964 14.3143 17.6586C14.4764 17.8208 14.5676 18.0408 14.5676 18.2701V20.108C14.5676 20.3374 14.4764 20.5573 14.3143 20.7195C14.1521 20.8817 13.9321 20.9728 13.7027 20.9728ZM13.7027 18.2697H11.8649V20.108H13.7027V18.2697Z" fill="white"/>
                            <path d="M18.6843 30.4864H13.3152C13.2006 30.4864 13.0906 30.4409 13.0095 30.3598C12.9284 30.2787 12.8828 30.1687 12.8828 30.054V23.1351C12.8828 23.0204 12.9284 22.9104 13.0095 22.8293C13.0906 22.7482 13.2006 22.7026 13.3152 22.7026H18.6843C18.799 22.7026 18.909 22.7482 18.9901 22.8293C19.0712 22.9104 19.1168 23.0204 19.1168 23.1351V30.054C19.1168 30.1687 19.0712 30.2787 18.9901 30.3598C18.909 30.4409 18.799 30.4864 18.6843 30.4864ZM13.7477 29.6216H18.2519V23.5675H13.7477V29.6216Z" fill="white"/>
                            <path d="M28.1338 15.7837H26.7828C26.5535 15.7837 26.3335 15.6926 26.1713 15.5304C26.0091 15.3682 25.918 15.1482 25.918 14.9189V13.5675C25.918 13.3381 26.0091 13.1181 26.1713 12.9559C26.3335 12.7938 26.5535 12.7026 26.7828 12.7026H28.1338C28.3631 12.7026 28.5831 12.7938 28.7453 12.9559C28.9075 13.1181 28.9986 13.3381 28.9986 13.5675V14.9189C28.9986 15.1482 28.9075 15.3682 28.7453 15.5304C28.5831 15.6926 28.3631 15.7837 28.1338 15.7837ZM26.7828 13.5675V14.9189H28.1338V13.5675H26.7828Z" fill="white"/>
                            <path d="M28.4306 21.2159H27.0797C26.8503 21.2159 26.6303 21.1248 26.4682 20.9626C26.306 20.8004 26.2148 20.5804 26.2148 20.351V19.0001C26.2148 18.7707 26.306 18.5508 26.4682 18.3886C26.6303 18.2264 26.8503 18.1353 27.0797 18.1353H28.4306C28.66 18.1353 28.88 18.2264 29.0422 18.3886C29.2044 18.5508 29.2955 18.7707 29.2955 19.0001V20.351C29.2955 20.5804 29.2044 20.8004 29.0422 20.9626C28.88 21.1248 28.66 21.2159 28.4306 21.2159ZM27.0797 19.0001V20.351H28.4306V19.0001H27.0797Z" fill="white"/>
                            <path d="M28.1338 26.6485H26.7828C26.5535 26.6485 26.3335 26.5573 26.1713 26.3952C26.0091 26.233 25.918 26.013 25.918 25.7836V24.4322C25.918 24.2029 26.0091 23.9829 26.1713 23.8207C26.3335 23.6585 26.5535 23.5674 26.7828 23.5674H28.1338C28.3631 23.5674 28.5831 23.6585 28.7453 23.8207C28.9075 23.9829 28.9986 24.2029 28.9986 24.4322V25.7836C28.9986 26.013 28.9075 26.233 28.7453 26.3952C28.5831 26.5573 28.3631 26.6485 28.1338 26.6485ZM26.7828 24.4322V25.7836H28.1338V24.4322H26.7828Z" fill="white"/>
                            <path d="M5.21578 15.7837H3.86486C3.63549 15.7837 3.41551 15.6926 3.25331 15.5304C3.09112 15.3682 3 15.1482 3 14.9189V13.5675C3 13.3381 3.09112 13.1181 3.25331 12.9559C3.41551 12.7938 3.63549 12.7026 3.86486 12.7026H5.21578C5.44516 12.7026 5.66514 12.7938 5.82734 12.9559C5.98953 13.1181 6.08065 13.3381 6.08065 13.5675V14.9189C6.08065 15.1482 5.98953 15.3682 5.82734 15.5304C5.66514 15.6926 5.44516 15.7837 5.21578 15.7837ZM3.86486 13.5675V14.9189H5.21578V13.5675H3.86486Z" fill="white"/>
                            <path d="M5.21578 21.2159H3.86486C3.63549 21.2159 3.41551 21.1248 3.25331 20.9626C3.09112 20.8004 3 20.5804 3 20.351V19.0001C3 18.7707 3.09112 18.5508 3.25331 18.3886C3.41551 18.2264 3.63549 18.1353 3.86486 18.1353H5.21578C5.44516 18.1353 5.66514 18.2264 5.82734 18.3886C5.98953 18.5508 6.08065 18.7707 6.08065 19.0001V20.351C6.08065 20.5804 5.98953 20.8004 5.82734 20.9626C5.66514 21.1248 5.44516 21.2159 5.21578 21.2159ZM3.86486 19.0001V20.351H5.21578V19.0001H3.86486Z" fill="white"/>
                            <path d="M5.21578 26.6485H3.86486C3.63549 26.6485 3.41551 26.5573 3.25331 26.3952C3.09112 26.233 3 26.013 3 25.7836V24.4322C3 24.2029 3.09112 23.9829 3.25331 23.8207C3.41551 23.6585 3.63549 23.5674 3.86486 23.5674H5.21578C5.44516 23.5674 5.66514 23.6585 5.82734 23.8207C5.98953 23.9829 6.08065 24.2029 6.08065 24.4322V25.7836C6.08065 26.013 5.98953 26.233 5.82734 26.3952C5.66514 26.5573 5.44516 26.6485 5.21578 26.6485ZM3.86486 24.4322V25.7836H5.21578V24.4322H3.86486Z" fill="white"/>
                            </svg>


                        <a href="#">Hotels</a>
                    </li>
                    <li class="active">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_890)">
                            <path d="M14.3669 26.9583V4.44788C14.3669 4.15348 14.1285 3.91455 13.8335 3.91455H5.02552C4.73059 3.91455 4.49219 4.15348 4.49219 4.44788V26.9583C4.49219 27.2527 4.73059 27.4916 5.02552 27.4916H13.8335C14.1285 27.4916 14.3669 27.2532 14.3669 26.9583ZM13.3002 26.425H5.55885V4.98122H13.3002V26.425Z" fill="white"/>
                            <path d="M15.7911 10.8538H24.5997C24.8946 10.8538 25.133 10.6148 25.133 10.3204V4.44788C25.133 4.15348 24.8946 3.91455 24.5997 3.91455H15.7911C15.4962 3.91455 15.2578 4.15348 15.2578 4.44788V10.3199C15.2578 10.6148 15.4967 10.8538 15.7911 10.8538ZM16.3245 4.98122H24.0663V9.78655H16.3245V4.98122Z" fill="white"/>
                            <path d="M15.7911 27.4918H24.5997C24.8946 27.4918 25.133 27.2529 25.133 26.9585V12.278C25.133 11.9836 24.8946 11.7446 24.5997 11.7446H15.7911C15.4962 11.7446 15.2578 11.9836 15.2578 12.278V26.9585C15.2578 27.2534 15.4967 27.4918 15.7911 27.4918ZM16.3245 12.8113H24.0663V26.4252H16.3245V12.8113Z" fill="white"/>
                            <path d="M4.53516 1.95728H12.8546V3.02394H4.53516V1.95728Z" fill="white"/>
                            <path d="M28.9355 2.9744H27.0897V0.533333C27.0897 0.238933 26.8513 0 26.5563 0H3.06458C2.76965 0 2.53125 0.238933 2.53125 0.533333V29.0875C2.53125 29.3819 2.76965 29.6208 3.06458 29.6208H5.79685V31.4667C5.79685 31.7611 6.03525 32 6.33018 32H28.9355C29.2305 32 29.4689 31.7611 29.4689 31.4667V3.50773C29.4689 3.21333 29.2299 2.9744 28.9355 2.9744ZM3.59792 1.06667H26.023V3.50773V28.5536H6.33018H3.59792V1.06667ZM28.4022 30.9333H6.86352V29.6208H26.5563C26.8513 29.6208 27.0897 29.3819 27.0897 29.0875V4.04107H28.4022V30.9333Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_1_890">
                            <rect width="32" height="32" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>


                        <a href="#">Templates</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="content">
        @if(session('success'))
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="successModalLabel">Success Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-light">
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
<script>
    $(document).ready(function() {
        $('#successModal').modal('show');
    });
</script>

            <!-- @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif -->

    <!-- @if($errors->any())
    <div class="alert alert-danger">
        Validation failed. Please check your input. :: {{$errors->message}}
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
@if($errors->any())
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="errorModalLabel">Validation Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-light">
                    <p>Validation failed. Please check your input:</p>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function () {
        @if($errors->any())
            $('#errorModal').modal('show');
        @endif
    });
</script>
            <div class="cp-5">
                <div class="d-flex justify-content-between align-items-center mb-42">
                    <div>
                        <div class="title-2 text-color-black-shade my-breadcrumb-1">The Captial > Hotels > Melrose > Create New Page</div>
                        <img src="https://staging.enfohub.com/assets/admin2/img/iconbar.png" width="29px" id="sidebarCollapse">
                    </div>
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="title-5 text-color-black-shade mb-4px text-right">
                                AWH
                            </div>
                            <div class="title-6 text-color-black-shade text-right">
                                Edwards & Co
                            </div>
                        </div>
                        <div class=" ml-22">
                            <img src="assets/images/user-profile.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="title-2 text-color-black-shade my-breadcrumb-2 mb-30" The Captial> Hotels > Melrose > Create New Page</div>
                <div class="d-flex justify-content-between align-items-center mb-20">
                    <div class="title-7 text-color-black-shade">About Hotel Page</div>
                </div>
                <div class="title-2 text-color-black-shade mb-56">Once the page is created, Page menu can be created through SIDE MENU tab in the portal.</div>
            </div>




            <form action="{{ route('submit.form') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <!-- ****************** section 1 ********************** -->
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <div class="bg-yellow mb-10">
                <div class="cp-6">
                    <div class="title-7 text-color-black-shade">Section 1: Banner</div>
                </div>
            </div>
            <div class="cp-5">

                <div class="title-8 text-color-black-shade mb-20">Add Background Image</div>

                <div class="image-upload-div text-center mb-30">
                   <label for="imageInputsection1">
                        <img src="{{asset('storage/' .$section1Data->backgroundImage ?? 'assets/images/photo.png')}}" alt="" width="188px" class="mb-30" id="uploadedImagesection1">
                        <div class="title-9 text-color-black-shade">Image will be cropped to aspect ratio 16:9</div>
                    </label>
                    <input type="file" name="section1image"  id="imageInputsection1" style="display: none">
                </div>

                <div class="title-8 text-color-black-shade mb-20">Banner Heading</div>
                <textarea name="section1Heading" id="section1Heading" rows="2" placeholder="e.g WELCOME" class="myinput5 mb-30 title-9 text-color-black-shade">{{ $section1Data->heading }}</textarea>
                <div class="title-8 text-color-black-shade mb-20">Banner Text</div>
                <textarea name="section1text"  id="section1text" rows="4" placeholder="Type text here...." class="myinput5 mb-100 title-9 text-color-black-shade">{{ $section1Data->bodyText }}</textarea>
            </div>

            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <!-- ****************** QUICK TIPS ********************** -->
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <input type="hidden" id="totalqt" value="{{ $totalqt }}">

            <div class="bg-yellow mb-3">
                <div class="cp-6">
                    <div class="title-7 text-color-black-shade">Quick TIPS </div>
                </div>
            </div>
            <div class="cp-5">

                @foreach ($quick_tips as $index => $quickTip)
                    <div class="title-8 text-color-black-shade mb-20">Tip {{ $index + 1 }}</div>
                    <input type="number" name="quicktipsID[{{ $index }}]" value="{{  $quickTip->id  }}" style="display: none">

                
                    <div class="row">
                        <div class="col-md-4">
                            <div class="title-8 text-color-black-shade mb-20">Tip Heading</div>
                            <textarea name="quicktipsHeading[{{ $index }}]" id="quicktipsHeading[{{ $index }}]" rows="1" placeholder="Enter URL here" class="myinput5 title-9 text-color-black-shade">{{ $quickTip->title }}</textarea>
                            @error("quicktipsHeading.$index")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-7 display-table">
                            <div class="vertical-middle">
                                <div class="title-8 text-color-black-shade mb-10">Tip Text</div>
                                <textarea name="quicktipsText[{{ $index }}]" id="quicktipsText[{{ $index }}]" rows="2" placeholder="Type text here...." class="myinput5 mb-20 title-9 text-color-black-shade">{{ $quickTip->text }}</textarea>
                            </div>
                        </div>
                        <a href="{{ route('item.show', ['id' => $quickTip->id]) }}"  class="text-danger">
                        <i class="fa fa-trash ml-5" style="font-size: 34px;"></i>
                        </a>

                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="title-8 text-color-black-shade mb-10">Tip Image</div>
                            <label for="imageInputQT[{{ $index }}]">      
                                <div class="image-upload-div text-center mb-20 cp-7 ">
                                <img src="{{ asset('storage/' .$quickTip->image ?? 'assets/images/image-plus.png') }}" alt="" onerror="this.src='assets/images/image-plus.png';" style="height:200px" id="uploadedImageQT[{{ $index }}]" name="quicktipsImage[{{ $index }}]" class="">
                                </div>
                            </label>
                            <input type="file" name="inputquicktipsimage[{{ $index }}]"  id="imageInputQT[{{ $index }}]" style="display: none">
                        </div>
                        <div class="col-md-8 display-table">
                            <div class="vertical-middle">
                                <div class="title-8 text-color-black-shade mb-20">Tip Icon</div>
                                <select id="iconDropdownqt{{ $index }}" name="iconDropdownqt{{ $index }}">
                                    <option value="">Select an icon</option>
                                    @foreach ($icons as $icon)
                                    <option value="{{ $icon }}" @if ($icon == $quickTip->icon) selected @endif>{{ $icon }}</option>

                                        <!-- <option value="{{ $icon }}">{{ $icon }}</option> -->
                                    @endforeach
                                </select>
                                <input type="hidden" name="selectedIconNameqt[{{ $index }}]" id="selectedIconNameqt{{ $index }}" value="">
                                <div class="col-md-3" >
                                    <div class="image-upload-div text-center mb-15 selected-iconqt mt-3" >
                                        <i id="selectedIcon{{ $index }}" style=" font-size: 124px;" class="{{ $quickTip->icon }}"></i>
                                    </div>
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        $('#iconDropdownqt{{ $index }}').change(function () {
                                            var selectedIcon = $(this).val();
                                            $('#selectedIcon{{ $index }}').removeClass().addClass(selectedIcon);
                                            $('#selectedIconNameqt{{ $index }}').val(selectedIcon);
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div id="quick-tips-section-template" style="display: none;">
                        <div class="title-8 text-color-black-shade mb-20">Tip TIP_NUMBER</div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="title-8 text-color-black-shade mb-20">Tip Heading</div>
                                <textarea name="DummyquicktipsHeading2222" id="quicktipsHeading[1111]" rows="1" placeholder="Enter URL here" class="myinput5 title-9 text-color-black-shade"></textarea>
                            </div>
                            <div class="col-md-7 display-table">
                                <div class="vertical-middle">
                                    <div class="title-8 text-color-black-shade mb-10">Tip Text</div>
                                    <textarea name="DummyquicktipsText2222" id="quicktipsText[1111]" rows="2" placeholder="Type text here...." class="myinput5 mb-20 title-9 text-color-black-shade"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="title-8 text-color-black-shade mb-10">Tip Image</div>
                                <label for="imageInputQT[1111]">
                                    <div class="image-upload-div text-center mb-20 cp-7">
                                        <img src="assets/images/image-plus.png" alt="" id="uploadedImageQT[1111]" name="quicktipsimage[1111]"  style="height:200px">
                                    </div>
                                </label>
                                <input type="file" name="inputquicktipsimage[1111]" id="imageInputQT[1111]" style="display: none">
                            </div>
                            <div class="col-md-8 display-table">
                                <div class="vertical-middle">
                                    <div class="title-8 text-color-black-shade mb-20">Tip Icon</div>
                                <select id="iconDropdownqt1111" name="iconDropdownqt1111">
                                    <option value="">Select an icon</option>
                                    @foreach ($icons as $icon)
                                        <option value="{{ $icon }}">{{ $icon }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="DummyselectedIconNameqt2222" id="selectedIconNameqt1111" value="">
                                <div class="col-md-3" >
                                    <div class="image-upload-div text-center mb-15 selected-iconqt mt-3" >
                                        <i id="selectedIcon1111" style=" font-size: 124px;" class=""></i>
                                    </div>
                                </div>
                                <script>
                                    function iconselectttt() {
                                            console.log("Document is ready."); // Add this line
                                            $('[id^="iconDropdownqt"]').change(function () {
                                            console.log('icon is selectinggggggggg');
                                            const number = $(this).attr('id').replace('iconDropdownqt', ''); // Get the number from ID
                                            const selectedIcon = $(this).val();
                                            $(`#selectedIcon${number}`).removeClass().addClass(selectedIcon);
                                            $(`#selectedIconNameqt${number}`).val(selectedIcon); // Update this input's value
                                         });

                                        }

   
                                
                                </script>
                                </div>
                            </div>
                        </div>
                </div>

                <div id="display-container">

                </div>
                


                <div class="titlle-10 text-color-yellow mr-5 mb-30"><u><h2>+Add a new Tip</h2></u></div>
            </div>
            <button type="submit" class="btn btn-primary ml-15 mt-3 mb-2 px-4 py-2 fs-8 rounded-pill shadow-sm" style="font-size: 38px;">
    Submit
</button>



            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <!-- ****************** section 2 ********************** -->
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->


            <div class="bg-yellow mb-10">
                <div class="cp-6">
                    <div class="title-7 text-color-black-shade">Section 2: General Heading </div>
                </div>
            </div>
            <div class="cp-5">
                <div class="title-8 text-color-black-shade mb-20">Section Heading</div>
                <textarea name="section2Heading" id="section2Heading" rows="5" placeholder="Type text here...." class="myinput5 mb-40 title-9 text-color-black-shade">{{ $section2Data->heading }}</textarea>
                <div class="title-8 text-color-black-shade mb-20">Section Text</div>
                <textarea name="section2Text" id="section2Text" rows="5" placeholder="Type text here...." class="myinput5 mb-70 title-9 text-color-black-shade">{{ $section2Data->bodyText }}</textarea>
                <div class="title-8 text-color-black-shade mb-20">Main Image</div>
                    <label for="imageInputsection2"  class="col-md-3">
                        <div class="image-upload-div text-center mb-30  ">
                        <img src="{{ asset('storage/' . ($section2Data->image ? $section2Data->image : 'images/image-plus.png')) }}" alt="" width="240px" style="height: 200px;" class="" id="uploadedImagesection2">
                        </div>
                    </label>
                    <input type="file" name="section2image"  id="imageInputsection2" style="display: none">
                <div class="title-8 text-color-black-shade mb-20">Slider Images</div>
                <div class="row">
                    <div class="col-md-3" >
                        <div class="image-upload-div text-center mb-15  "> 
                                <label for="sliderimage1Inputsection2"   >
                                <img src="{{ asset('storage/' . ($section2Data->sliderimage1 ? $section2Data->sliderimage1 : 'images/image-plus.png')) }}" alt="" width="240px" style="height:200px" id="sliderimage1uploadedsection2">
                            </label>
                            </div>
                        <input type="file" name="section2Slideimage1"  id="sliderimage1Inputsection2" style="display: none">
                    </div>
                    <div class="col-md-3">
                        <div class="image-upload-div text-center mb-15  ">
                                <label for="sliderimage2Inputsection2"  class="col-md-12">
                                <img src="{{ asset('storage/' . ($section2Data->sliderimage2 ? $section2Data->sliderimage2 : 'images/image-plus.png')) }}" alt="" width="240px" style="height:200px"  id="sliderimage2uploadedsection2" >
                            </label>
                            </div>
                        <input type="file" name="section2Slideimage2"  id="sliderimage2Inputsection2" style="display: none">
                    </div>
                    <div class="col-md-3">
                        <div class="image-upload-div text-center mb-15 ">
                            <label for="sliderimage3Inputsection2"  class="col-md-12">
                                <img src="{{ asset('storage/' . ($section2Data->sliderimage3 ? $section2Data->sliderimage3 : 'images/image-plus.png')) }}" alt="" width="240px"  style="height:200px"  id="sliderimage3uploadedsection2" class="">
                            </label>
                        </div>
                        <input type="file" name="section2Slideimage3"  id="sliderimage3Inputsection2" style="display: none">
                    </div>
                    <div class="col-md-3">
                        <div class="image-upload-div text-center mb-15 ">
                            <label for="sliderimage4Inputsection2"  class="col-md-12">
                                <img src="{{ asset('storage/' . ($section2Data->sliderimage4 ? $section2Data->sliderimage4 : 'images/image-plus.png')) }}" alt="" width="240px"  style="height:200px" id="sliderimage4uploadedsection2" class="">
                            </label>
                        </div>
                        <input type="file" name="section2Slideimage4"  id="sliderimage4Inputsection2" style="display: none">
                    </div>
                </div>
                <div class="title-8 text-color-black-shade mb-20">Secondary Text</div>
                <textarea name="section2Text2" id="section2Text2" rows="2" placeholder="Type text here...." class="myinput5 mb-100 title-9 text-color-black-shade">{{ $section2Data->text_2 }}</textarea>
                <div class="title-8 text-color-black-shade mb-20">Video</div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-upload-div text-center mb-30 p-0 pt-1">
                            @if ($section2Data->video_url)
                                <div id="youtube-player" style="min-height:300px"></div>
                            @else
                                <img src="assets/images/video.png" alt="N/A">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8 display-table">
                        <div class="vertical-middle">
                            <div class="title-9 text-color-black-shade mb-30">YouTube URL</div>
                            <textarea name="section2YoutubeURL" id="section2YoutubeURL" rows="1" placeholder="Enter URL here" class="myinput5 title-9 text-color-black-shade">{{ $section2Data->video_url }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <!-- ****************** section 3 ********************** -->
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <div class="bg-yellow mb-10">
                <div class="cp-6">
                    <div class="title-7 text-color-black-shade">Section 3: About the hotel</div>
                </div>
            </div>
            <div class="cp-5 mb-50">
                <div class="title-8 text-color-black-shade mb-20">Section Heading</div>
                <textarea name="section3Heading" id="" rows="4" placeholder="Type text here...." class="myinput5 mb-30 title-9 text-color-black-shade">{{ $section3Data->heading }}</textarea>
                <div class="title-8 text-color-black-shade mb-20">Section Text</div>
                <textarea name="section3Text" id="" rows="4" placeholder="Type text here...." class="myinput5 mb-30 title-9 text-color-black-shade">{{ $section3Data->bodyText }}</textarea>
                <div class="title-8 text-color-black-shade mb-20">Section Button Text</div>
                <textarea name="section3buttonText" id="" rows="2" placeholder="Type text here...." class="myinput5 mb-30 title-9 text-color-black-shade">{{ $section3Data->buttonText }}</textarea>
                <div class="title-8 text-color-black-shade mb-20">Section Button Link</div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="title-9 icon-btn-links text-white mb-30">Attach a URL</div>
                    </div>
                    <div class="col-md-3">
                        <div class="title-9 icon-btn-links text-white mb-30">Attach a Page</div>
                    </div>
                    <div class="col-md-3">
                        <div class="title-9 icon-btn-links text-white mb-30">Attach a PDF</div>
                    </div>
                    <div class="col-md-3">
                        <div class="title-9 icon-btn-links text-white mb-30">Attach an Image</div>
                    </div>
                </div>
                <div class="title-8 text-color-black-shade mb-20">Section Cards</div>
                <div id="card-section-template">

                   <div class="d-flex align-items-center mb-20">
                    <div>
                        <img src="assets/images/dots.png" alt="">
                    </div>
                 <div class="title-8 text-color-black-shade ml-23">Card {{ '1' }}</div>
                </div>
                <div class="title-9 text-color-black-shade mb-14">Card Image</div>

                <div class="row">
                    <div class="col-md-3 display-table mb-30">
                    <label for="cardimagesection3" >
                        <div class="image-upload-div text-center height-100">
                            <img src="{{ asset('storage/' . ($sectioncards[0]->backgroundimage ? $sectioncards[0]->backgroundimage : 'images/image-plus.png')) }}" alt="" width="240px" class="mb-60" id="uploadedcardImagesection3">
                            <div class="title-9  text-color-black-shade">Image will be cropped to aspect ratio 4:3</div>
                        </div>
                    </label>
                    <input type="file" name="cardimagesection3"  id="cardimagesection3" style="display: none">

                    </div>
                    <div class="col-md-9">
                        <div class="d-flex align-items-end mb-34">
                        <div class="selected-icon mt-3">
                        @if ($sectioncards[0]->cardIcon)
                            <i class="{{ $sectioncards[0]->cardIcon }}" style=" font-size: 100px;"></i>
                        @else
                            <img src="assets/images/photo.png" alt="" width="50px" class="" id="iconImage">
                        @endif
                        </div>
                            <div class="title-9 text-color-black-shade ml-13">Card icon</div>
                        </div>

                        <input type="text" id="iconSearchhh" placeholder="Filter icon name here ...">

                        <select id="iconDropdownnn" name="iconDropdownnn" >
                            <option value="">Select an icon</option>
                            @foreach ($icons as $icon)
                                <option value="{{ $icon }}" @if ($icon == $sectioncards[0]->cardIcon) selected @endif >{{ $icon }}</option>
                            @endforeach
                        </select>

                        <input type="hidden" name="selectedIconName" id="selectedIconName" value="">
                        <div class="col-md-6 mt-3 p-0">
                            <input type="text" rows="2" name="cardtitlesection3" placeholder="Card Title"  value="{{$sectioncards[0]->cardTitle }}" class="myinput5 mb-30 title-9 text-color-black-shade">
                        </div>
                        <textarea name="cardtextsection3" id="" rows="2" placeholder="Card Text" class="myinput5 mb-30 title-9 text-color-black-shade">{{ $sectioncards[0]->cardText }}</textarea>
                        <div class="title-8 text-color-black-shade mb-20">Card Button Text</div>
                        <textarea name="cardbuttontextsection3" id="" rows="1" placeholder="Type text here...." class="myinput5 mb-30 title-9 text-color-black-shade">{{ $sectioncards[0]->buttonText }}</textarea>
                        <div class="title-8 text-color-black-shade mb-20">Section Button Link</div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="title-9 icon-btn-links text-white mb-30">Attach a URL</div>
                            </div>
                            <div class="col-md-4">
                                <div class="title-9 icon-btn-links text-white mb-30">Attach a Page</div>
                            </div>
                            <div class="col-md-4">
                                <div class="title-9 icon-btn-links text-white mb-30">Attach a PDF</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="title-10 text-color-yellow mb-30"><u>+Add a new Card</u></div>
                <div id="card-section-template">
      <div class="d-flex align-items-center mb-20">
        <!-- ... -->
     </div>
     <!-- ... (rest of the card section) ... -->
     </div>
            </div>



            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->
            <!-- ****************** section 4 ********************** -->
            <!-- ++++++++++++++^^^^^^^^^^^^^^***********&&&&&&&&&&&&&&& -->

            <div class="bg-yellow mb-10">
                <div class="cp-6">
                    <div class="title-7 text-color-black-shade">Section 4: Footer</div>
                </div>
            </div>
            <div class="cp-5 mb-50">
                <div class="title-8 text-color-black-shade mb-20">Footer Title</div>
                <textarea name="footertitle" id="" rows="2" placeholder="Type text here...." class="myinput5 mb-30 title-9 text-color-black-shade"></textarea>
                <div class="title-8 text-color-black-shade mb-20">Footer Text</div>
                <textarea name="footertext" id="" rows="2" placeholder="Type text here...." class="myinput5 mb-30 title-9 text-color-black-shade"></textarea>
                <div class="title-8 text-color-black-shade mb-20">Email</div>
                <textarea name="footeremail" id="" rows="2" placeholder="Type text here...." class="myinput5 mb-30 title-9 text-color-black-shade"></textarea>
                <div class="title-8 text-color-black-shade mb-20">Phone no.</div>
                <textarea name="footerphone" id="" rows="2" placeholder="Type text here...." class="myinput5 mb-30 title-9 text-color-black-shade"></textarea>
                <div class="title-8 text-color-black-shade mb-20">Front Desk Text</div>
                <textarea name="footerdesktext" id="" rows="2" placeholder="Type text here...." class="myinput5 mb-30 title-9 text-color-black-shade"></textarea>
                <div class="soci-input d-flex align-items-center mb-30">
                    <div>
                        <img src="assets/images/facebook.png" alt="">
                    </div>
                    <input name="footerfacebook" type="text" class="myinput7">
                </div>
                <div class="soci-input d-flex align-items-center mb-30">
                    <div>
                        <img src="assets/images/instagram.png" alt="">
                    </div>
                    <input name="footerinsta" type="text" class="myinput7">
                </div>
                <div class="soci-input d-flex align-items-center mb-30">
                    <div>
                        <img src="assets/images/twitter.png" alt="">
                    </div>
                    <input name="fotertwiter" type="text" class="myinput7">
                </div>
                <div class="soci-input d-flex align-items-center mb-30">
                    <div>
                        <img src="assets/images/linkedin.png" alt="">
                    </div>
                    <input  name="footerlikedin" type="text" class="myinput7">
                </div>
            </div>

            <button type="submit">submit</button>

</form>   
        </div>
    </div>
    <script type="text/javascript" src="assets/js/functions.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardTemplate = document.getElementById('card-section-template');
            const addCardButton = document.querySelector('.title-10');
            let cardNumber = 2; // Initialize the card number
            
            addCardButton.addEventListener('click', function() {
                const clonedCard = cardTemplate.cloneNode(true);
                resetInputFields(clonedCard);
                updateCardNumber(clonedCard, cardNumber);
                cardNumber++;
            clonedCard.style.display = 'block'; // Show the cloned card
            cardTemplate.parentNode.insertBefore(clonedCard, addCardButton);
        });

        function resetInputFields(card) {
            const inputFields = card.querySelectorAll('input, textarea');
            inputFields.forEach(field => {
                field.value = '';
            });
        }
        
        function updateCardNumber(card, number) {
            const titleElement = card.querySelector('.title-8');
            titleElement.textContent = titleElement.textContent.replace('1', number);
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const quickTipsTemplate = document.getElementById('quick-tips-section-template');
        const addTipButton = document.querySelector('.titlle-10');
        const totalqtInput = document.getElementById('totalqt');
        
        let tipNumber = parseInt(totalqtInput.value) || 0;
        
        addTipButton.addEventListener('click', function () {
            const templateContent = quickTipsTemplate.innerHTML;
            const modifiedContent = modifyTemplate(templateContent, tipNumber);

            const newDiv = document.createElement('div');
            newDiv.innerHTML = modifiedContent;
            newDiv.className = 'quick-tips-section'; // Add a class to identify the modified sections
            const imageInput = newDiv.querySelector(`input[name="inputquicktipsimage[${tipNumber}]"]`);
            const uploadedImage = newDiv.querySelector(`img[name="quicktipsimage[${tipNumber}]"]`);
            handleImageSelection(imageInput, uploadedImage);

            document.getElementById('display-container').appendChild(newDiv);

            tipNumber++;
            totalqtInput.value = tipNumber; // Update the input field value
            thisFunction(tipNumber);
            console.log("function is called ");
            iconselectttt();
        });
    });

    function modifyTemplate(content, number) {
        const clonedContent = content
    .replace(/\[1111\]/g, `[${number}]`)
    .replace(/Tip TIP_NUMBER/g, `Tip ${number + 1}`)
    .replace(/name="imageInputQT1111"/g, `name="imageInputQT${number}"`)
    // .replace(/name="quicktipsimage1111"/g, `name="quicktipsimage${number}"`)
    .replace(/id="iconDropdownqt1111"/g, `id="iconDropdownqt${number}"`)
    .replace(/id="selectedIconNameqt1111"/g, `id="selectedIconNameqt${number}"`)
    .replace(/name="DummyselectedIconNameqt2222"/g, `name="selectedIconNameqt[${number}]"`)
    .replace(/name="DummyquicktipsHeading2222"/g, `name="quicktipsHeading[${number}]"`)
    .replace(/name="DummyquicktipsText2222"/g, `name="quicktipsText[${number}]"`)
    .replace(/id="selectedIcon1111"/g, `id="selectedIcon${number}"`);
        return clonedContent;  
    }
    function handleImageSelection(imageInput, uploadedImage) {
    imageInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                uploadedImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
    }
    
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('imageInputsection1');
        const uploadedImage = document.getElementById('uploadedImagesection1');
        
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const totalqtInput = document.getElementById('totalqt'); // Input field for totalqt

        let totalSets = parseInt(totalqtInput.value) || 1; // Update this with the total number of sets

        for (let i = 0; i < totalSets; i++) {
            const imageInput = document.getElementById(`imageInputQT[${i}]`);
            const uploadedImage = document.getElementById(`uploadedImageQT[${i}]`);

            imageInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        uploadedImage.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
    });
    function thisFunction(number) {
           console.log("Hi Sir, thisis ::: ", number);
           const totalqtInput = document.getElementById('totalqt'); 
           console.log("Hi Sir, totalSets ::: ", totalqtInput);

        }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('imageInputsection2');
        const uploadedImage = document.getElementById('uploadedImagesection2');
        
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('sliderimage1Inputsection2');
        const uploadedImage = document.getElementById('sliderimage1uploadedsection2');
        
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('sliderimage2Inputsection2');
        const uploadedImage = document.getElementById('sliderimage2uploadedsection2');

        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
 </script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('sliderimage3Inputsection2');
        const uploadedImage = document.getElementById('sliderimage3uploadedsection2');
        
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
    </script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('sliderimage4Inputsection2');
        const uploadedImage = document.getElementById('sliderimage4uploadedsection2');
        
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('cardimagesection3');
        const uploadedImage = document.getElementById('uploadedcardImagesection3');
        
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
        onYouTubeIframeAPIReady();
    });
</script>

<script>
    const iconDropdown = document.getElementById('iconDropdownnn');
    const iconSearch = document.getElementById('iconSearchhh');
    const selectedIconContainer = document.querySelector('.selected-icon');
    const selectedIconNameInput = document.getElementById('selectedIconName');
    
    iconDropdown.addEventListener('change', function() {
        const selectedIcon = this.value;
        selectedIconNameInput.value = selectedIcon;
    });
    iconDropdown.addEventListener('change', function() {
        const selectedIcon = this.value;
        selectedIconContainer.innerHTML = `<i class="${selectedIcon} fa-4x" style="color: black;"></i>`;
    });
    
    iconSearch.addEventListener('input', function() {
        const searchTerm = iconSearch.value.toLowerCase();
        const matchingIcons = @json($icons); // Convert PHP array to JavaScript array
        
        const filteredIcons = matchingIcons.filter(icon => icon.includes(searchTerm));
        
        // Update the dropdown options with filtered icons
        const dropdownOptions = filteredIcons.map(icon => `<option value="${icon}">${icon}</option>`).join('');
        iconDropdown.innerHTML = `<option value="">Select an icon</option>${dropdownOptions}`;
    });
</script>
<script src="https://www.youtube.com/iframe_api"></script>

<script>
    console.log("this is onYou***********8APIReady ::: ");
    // This function creates an <iframe> (and YouTube player)
// after the API code downloads.
function onYouTubeIframeAPIReady() {
    console.log("this is onYouTubeIframeAPIReady ::: ");

        var videoUrl = '{{$section2Data->video_url}}';
        var videoId = getYouTubeVideoId(videoUrl);

        if (videoId) {
            console.log("this is ID ::: ", videoId);
            var player = new YT.Player('youtube-player', {
                height: '100%',
                width: '90%',
                videoId: videoId,
                playerVars: {
                    'rel': 0, // Disable related videos at the end
                    'controls': 1 // Show video controls
                }
            });
        }
    }

    // Extract YouTube video ID from URL
    function getYouTubeVideoId(url) {
        console.log("this is url ::: ", url);

        var videoIdRegex = /[?&]v=([^&#]*)/;
        var shortLinkRegex = /youtu\.be\/([^\/]*)/;
        var match = url.match(videoIdRegex) || url.match(shortLinkRegex);
        return match && match[1];
    }

    // var player;
    // function onYouTubeIframeAPIReady() {
    //     var videoUrl = "{{ $section2Data->video_url }}";
    //     var videoId = videoUrl.match(/youtu\.be\/([^?]+)/)[1];
    //     var startTime = parseInt(videoUrl.match(/t=(\d+)/)[1]);
        
    //     player = new YT.Player('youtube-player', {
    //         height: '200',
    //         width: '240',
    //         videoId: videoId,
    //         playerVars: {
    //             start: startTime,
    //         },
    //     });
    // }
</script>


</body>
</html>


