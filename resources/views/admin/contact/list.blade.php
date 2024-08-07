<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='200'>타입</th>
        <th width='200'>고객</th>
        <th>제목</th>
        <th width='200'>상태</th>
        <th width='200'>등록일자</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">

                <td width='200'>
                    {{$item->type}}
                </td>
                <td width='200'>
                    @if(isset($item->first_name))
                    {{$item->first_name}} {{$item->last_name}}
                    @else
                    {{$item->name}}
                    @endif
                    <div>{{$item->email}}</div>
                    <div>{{$item->phone}}</div>
                </td>

                <td>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->subject}}
                    </x-click>
                </td>

                <td width='200'>{{$item->status}}</td>
                <td width='200'>{{$item->created_at}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
