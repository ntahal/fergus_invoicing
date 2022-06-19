<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Invoice extends Model
{
    use Sortable;

    public $sortable = ['date', 'site_address','job_type', 'purchase_order', 'price_ex_gst','due_date','status'];
    /**
     * Get the user that owns the Invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
