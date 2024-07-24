# 슬라이더
슬라이더를 처리합니다.

## 슬라이더 그룹
슬라이더는 여러개의 이미지를 순차적으로 출력하는 기능입니다. 다수의 이미지를 그룹으로 관리합니다.

`/admin/cms/sliders`는 슬라이드 코드를 관리합니다.

## 슬라이드 이미지
`/admin/cms/sliders/images/{코드}`


## 사이트위젯
라이브와이어 컴포넌트를 이용하여 슬라이드를 출력할 수 있습니다.

```php
@livewire('SiteSliders',[
    'code'=>1
])
```

커스텀으로 view를 지정할 수도 있습니다.
```php
@livewire('SiteSliders',[
    'code'=>1,
    'viewFile' => "블레이드뷰"
])
```
