<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='200'>타입</th>
        <th>타이틀</th>
        <th width='200'>시작</th>
        <th width='200'>종료</th>
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

                <td>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->title}}
                    </x-click>
                </td>
                <td width='200'>{{$item->started_at}}</td>
                <td width='200'>{{$item->finished_at}}</td>
                <td width='200'>{{$item->created_at}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
