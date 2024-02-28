<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;
class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'opportunity_id',
        'user_id'
    ];
     
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    static public function signedInUserSubscribedOpportunities() 
    {
        $subscribedOpportunitiesIds = Subscription::getSubscribedOpportunitiesIds();
          
        return Opportunity::whereIn('id', $subscribedOpportunitiesIds)->get();
    }

    static private function getSubscribedOpportunitiesIds() 
    {
        return Subscription::where('user_id', '=', Auth::user()->id)
            ->get('opportunity_id')
            ->map(fn ($row) => $row['opportunity_id']);
    }
}
