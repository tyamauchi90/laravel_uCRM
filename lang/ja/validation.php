<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeは:date以降の日付である必要があります。',
    'after_or_equal' => ':attributeは:date以降、または同日の日付である必要があります。',
    'alpha' => ':attributeは文字のみである必要があります。',
    'alpha_dash' => ':attributeは文字、数字、ダッシュ、アンダースコアのみ含むことができます。',
    'alpha_num' => ':attributeは文字と数字のみを含むことができます。',
    'array' => ':attributeは配列である必要があります。',
    'ascii' => ':attributeはASCIIの単バイト文字および記号のみを含むことができます。',
    'before' => ':attributeは:date以前の日付である必要があります。',
    'before_or_equal' => ':attributeは:date以前、または同日の日付である必要があります。',
    'between' => ['array' => ':attributeの項目は:minから:maxの間である必要があります。', 'file' => ':attributeは:minから:maxキロバイトの間である必要があります。', 'numeric' => ':attributeは:minから:maxの間の数値である必要があります。', 'string' => ':attributeは:minから:max文字の間である必要があります。',],
    'boolean' => ':attributeフィールドは真、または偽である必要があります。',
    'confirmed' => ':attributeの確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_equals' => ':attributeは:dateと同じ日付でなければいけません。',
    'date_format' => ':attributeは:formatという形式と一致しません。',
    'decimal' => ':attributeは:decimal小数点以下を持つ数値でなければいけません。',
    'declined' => ':attributeは辞退しなければいけません。',
    'declined_if' => ':otherが:valueの場合、:attributeは辞退しなければいけません。',
    'different' => ':attributeと:otherは異なっていなければなりません。',
    'digits' => ':attributeは:digits桁でなければいけません。',
    'digits_between' => ':attributeは:min桁から:max桁の間である必要があります。',
    'dimensions' => ':attributeの画像寸法が無効です。',
    'distinct' => ':attributeフィールドには重複する値が存在しています。',
    'doesnt_end_with' => ':attributeは次のいずれかで終わってはいけません: :values。',
    'doesnt_start_with' => ':attributeは次のいずれかで始まってはいけません: :values。',
    'email' => ':attributeは有効なEメールアドレスである必要があります。',
    'ends_with' => ':attributeは次のいずれかで終わる必要があります: :values。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'file' => ':attributeはファイルである必要があります。',
    'filled' => ':attributeフィールドには値が必要です。',
    'gt' => ['array' => ':attributeは:value個以上の項目を持つ必要があります。', 'file' => ':attributeは:valueキロバイトより大きくなければいけません。', 'numeric' => ':attributeは:valueより大きくなければいけません。', 'string' => ':attributeは:value文字より多くある必要があります。',],
    'gte' => ['array' => ':attributeは:value個以上の項目を持つ必要があります。', 'file' => ':attributeは:valueキロバイト以上でなければいけません。', 'numeric' => ':attributeは:value以下でなければいけません。', 'string' => ':attributeは:value文字以上でなければいけません。',],
    'image' => ':attributeは画像でなければいけません。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeフィールドは:otherに存在しません。',
    'integer' => ':attributeは整数でなければいけません。',
    'ip' => ':attributeは有効なIPアドレスでなければいけません。',
    'ipv4' => ':attributeは有効なIPv4アドレスでなければいけません。',
    'ipv6' => ':attributeは有効なIPv6アドレスでなければいけません。',
    'json' => ':attributeは有効なJSON文字列でなければいけません。',
    'lowercase' => ':attributeは小文字でなければいけません。',
    'lt' => ['array' => ':attributeは:value個未満の項目を持つ必要があります。', 'file' => ':attributeは:valueキロバイト未満でなければいけません。', 'numeric' => ':attributeは:value未満でなければいけません。', 'string' => ':attributeは:value文字未満でなければいけません。',],
    'lte' => ['array' => ':attributeには:value個を超える項目を持つことができません。', 'file' => ':attributeは:valueキロバイト以下でなければいけません。', 'numeric' => ':attributeは:value以下でなければいけません。', 'string' => ':attributeは:value文字以下でなければいけません。',],
    'mac_address' => ':attributeは有効なMACアドレスである必要があります。',
    'max' => ['array' => ':attributeには:max個を超える項目を持つことができません。', 'file' => ':attributeは:maxキロバイトを超えてはいけません。', 'numeric' => ':attributeは:maxを超えてはいけません。', 'string' => ':attributeは:max文字を超えてはいけません。',],
    'max_digits' => ':attributeには:max桁を超える数値を持つことができません。',
    'mimes' => ':attributeは:valuesタイプのファイルでなければいけません。',
    'mimetypes' => ':attributeは:valuesタイプのファイルでなければいけません。',
    'min' => ['array' => ':attributeは少なくとも:min個の項目を持つ必要があります。', 'file' => ':attributeは少なくとも:minキロバイトでなければいけません。', 'numeric' => ':attributeは少なくとも:minでなければいけません。', 'string' => ':attributeは少なくとも:min文字でなければいけません。',],
    'min_digits' => ':attributeは少なくとも:min桁でなければいけません。',
    'missing' => ':attributeフィールドは必要ありません。',
    'missing_if' => ':otherが:valueの場合、:attributeフィールドは必要ありません。',
    'missing_unless' => ':otherが:valueでない限り、:attributeフィールドは必要ありません。',
    'missing_with' => ':valuesが存在する場合、:attributeフィールドは必要ありません。',
    'missing_with_all' => ':valuesが存在する場合、:attributeフィールドは必要ありません。',
    'multiple_of' => ':attributeは:valueの倍数でなければいけません。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeは数値でなければいけません。',
    'password' => ['letters' => ':attributeは少なくとも1文字含む必要があります。', 'mixed' => ':attributeは少なくとも1つの大文字と小文字を含む必要があります。', 'numbers' => ':attributeは少なくとも1つの数字を含む必要があります。', 'symbols' => ':attributeは少なくとも1つの記号を含む必要があります。', 'uncompromised' => '提供された:attributeがデータ漏洩で見つかりました。異なる:attributeを選択してください。',],
    'present' => ':attributeフィールドが存在する必要があります。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_unless' => ':otherが:valuesに含まれていない限り、:attributeフィールドは禁止されています。',
    'prohibits' => ':attributeフィールドは:otherの存在を禁止しています。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeフィールドは必須です。',
    'required_array_keys' => ':attributeフィールドには、:valuesのエントリを含む必要があります。',
    'required_if' => ':otherが:valueのとき、:attributeフィールドは必須です。',
    'required_if_accepted' => ':otherが承認されている場合、:attributeフィールドは必須です。',
    'required_unless' => ':otherが:valuesに含まれていない限り、:attributeフィールドは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all' => ':valuesのどれも存在しない場合、:attributeフィールドは必須です。',
    'same' => ':attributeと:otherが一致する必要があります。',
    'size' => ['array' => ':attributeは:size個の項目を含む必要があります。', 'file' => ':attributeは:sizeキロバイトである必要があります。', 'numeric' => ':attributeは:sizeである必要があります。', 'string' => ':attributeは:size文字である必要があります。',],
    'starts_with' => ':attributeは次のいずれかで始まる必要があります: :values。',
    'string' => ':attributeは文字列でなければいけません。',
    'timezone' => ':attributeは有効なタイムゾーンでなければいけません。',
    'unique' => ':attributeは既に取得されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは大文字でなければいけません。',
    'url' => ':attributeは有効なURLでなければいけません。',
    'ulid' => ':attributeは有効なULIDでなければいけません。',
    'uuid' => ':attributeは有効なUUIDでなければいけません。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
