<?php

namespace TallStackUi\Support;

/**
 * This is an unused class that aims to save all commonly used
 * tailwindcss classes such as colors, hover, ring and others.
 *
 * @deprecated This class can not be used.
 */
abstract class TailwindSafelistClasses
{
    public const TEXT = [
        'primary' => 'text-primary-50 text-primary-100 text-primary-200 text-primary-300 text-primary-400 text-primary-500 text-primary-600 text-primary-700 text-primary-800 text-primary-900 text-primary-950',
        'secondary' => 'text-secondary-50 text-secondary-100 text-secondary-200 text-secondary-300 text-secondary-400 text-secondary-500 text-secondary-600 text-secondary-700 text-secondary-800 text-secondary-900 text-secondary-950',
        'dark' => 'text-gray-50 text-gray-100 text-gray-200 text-gray-300 text-gray-400 text-gray-500 text-gray-600 text-gray-700 text-gray-800 text-gray-900 text-gray-950',
        'white' => 'text-white',
        'black' => 'text-black',
        'slate' => 'text-slate-50 text-slate-100 text-slate-200 text-slate-300 text-slate-400 text-slate-500 text-slate-600 text-slate-700 text-slate-800 text-slate-900 text-slate-950',
        'gray' => 'text-gray-50 text-gray-100 text-gray-200 text-gray-300 text-gray-400 text-gray-500 text-gray-600 text-gray-700 text-gray-800 text-gray-900 text-gray-950',
        'zinc' => 'text-zinc-50 text-zinc-100 text-zinc-200 text-zinc-300 text-zinc-400 text-zinc-500 text-zinc-600 text-zinc-700 text-zinc-800 text-zinc-900 text-zinc-950',
        'neutral' => 'text-neutral-50 text-neutral-100 text-neutral-200 text-neutral-300 text-neutral-400 text-neutral-500 text-neutral-600 text-neutral-700 text-neutral-800 text-neutral-900 text-neutral-950',
        'stone' => 'text-stone-50 text-stone-100 text-stone-200 text-stone-300 text-stone-400 text-stone-500 text-stone-600 text-stone-700 text-stone-800 text-stone-900 text-stone-950',
        'red' => 'text-red-50 text-red-100 text-red-200 text-red-300 text-red-400 text-red-500 text-red-600 text-red-700 text-red-800 text-red-900 text-red-950',
        'orange' => 'text-orange-50 text-orange-100 text-orange-200 text-orange-300 text-orange-400 text-orange-500 text-orange-600 text-orange-700 text-orange-800 text-orange-900 text-orange-950',
        'amber' => 'text-amber-50 text-amber-100 text-amber-200 text-amber-300 text-amber-400 text-amber-500 text-amber-600 text-amber-700 text-amber-800 text-amber-900  text-amber-950',
        'yellow' => 'text-yellow-50 text-yellow-100 text-yellow-200 text-yellow-300 text-yellow-400 text-yellow-500 text-yellow-600 text-yellow-700 text-yellow-800 text-yellow-900 text-yellow-950',
        'lime' => 'text-lime-50 text-lime-100 text-lime-200 text-lime-300 text-lime-400 text-lime-500 text-lime-600 text-lime-700 text-lime-800 text-lime-900 text-lime-950',
        'green' => 'text-green-50 text-green-100 text-green-200 text-green-300 text-green-400 text-green-500 text-green-600 text-green-700 text-green-800 text-green-900 text-green-950',
        'emerald' => 'text-emerald-50 text-emerald-100 text-emerald-200 text-emerald-300 text-emerald-400 text-emerald-500 text-emerald-600 text-emerald-700 text-emerald-800 text-emerald-900 text-emerald-950',
        'teal' => 'text-teal-50 text-teal-100 text-teal-200 text-teal-300 text-teal-400 text-teal-500 text-teal-600 text-teal-700 text-teal-800 text-teal-900 text-teal-950',
        'cyan' => 'text-cyan-50 text-cyan-100 text-cyan-200 text-cyan-300 text-cyan-400 text-cyan-500 text-cyan-600 text-cyan-700 text-cyan-800 text-cyan-900 text-cyan-950',
        'sky' => 'text-sky-50 text-sky-100 text-sky-200 text-sky-300 text-sky-400 text-sky-500 text-sky-600 text-sky-700 text-sky-800 text-sky-900 text-sky-950',
        'blue' => 'text-blue-50 text-blue-100 text-blue-200 text-blue-300 text-blue-400 text-blue-500 text-blue-600 text-blue-700 text-blue-800 text-blue-900 text-blue-950',
        'indigo' => 'text-indigo-50 text-indigo-100 text-indigo-200 text-indigo-300 text-indigo-400 text-indigo-500 text-indigo-600 text-indigo-700 text-indigo-800 text-indigo-900 text-indigo-950',
        'violet' => 'text-violet-50 text-violet-100 text-violet-200 text-violet-300 text-violet-400 text-violet-500 text-violet-600 text-violet-700 text-violet-800 text-violet-900 text-violet-950',
        'purple' => 'text-purple-50 text-purple-100 text-purple-200 text-purple-300 text-purple-400 text-purple-500 text-purple-600 text-purple-700 text-purple-800 text-purple-900 text-purple-950',
        'fuchsia' => 'text-fuchsia-50 text-fuchsia-100 text-fuchsia-200 text-fuchsia-300 text-fuchsia-400 text-fuchsia-500 text-fuchsia-600 text-fuchsia-700 text-fuchsia-800 text-fuchsia-900 text-fuchsia-950',
        'pink' => 'text-pink-50 text-pink-100 text-pink-200 text-pink-300 text-pink-400 text-pink-500 text-pink-600 text-pink-700 text-pink-800 text-pink-900 text-pint-950',
        'rose' => 'text-rose-50 text-rose-100 text-rose-200 text-rose-300 text-rose-400 text-rose-500 text-rose-600 text-rose-700 text-rose-800 text-rose-900 text-rose-950',
    ];

    public const BG = [
        'primary' => 'bg-primary-50 bg-primary-100 bg-primary-200 bg-primary-300 bg-primary-400 bg-primary-500 bg-primary-600 bg-primary-700 bg-primary-800 bg-primary-900 bg-primary-950',
        'secondary' => 'bg-secondary-50 bg-secondary-100 bg-secondary-200 bg-secondary-300 bg-secondary-400 bg-secondary-500 bg-secondary-600 bg-secondary-700 bg-secondary-800 bg-secondary-900 bg-secondary-950',
        'dark' => 'bg-gray-50 bg-gray-100 bg-gray-200 bg-gray-300 bg-gray-400 bg-gray-500 bg-gray-600 bg-gray-700 bg-gray-800 bg-gray-900 bg-gray-950',
        'white' => 'bg-white',
        'black' => 'bg-black',
        'slate' => 'bg-slate-50 bg-slate-100 bg-slate-200 bg-slate-300 bg-slate-400 bg-slate-500 bg-slate-600 bg-slate-700 bg-slate-800 bg-slate-900 bg-slate-950',
        'gray' => 'bg-gray-50 bg-gray-100 bg-gray-200 bg-gray-300 bg-gray-400 bg-gray-500 bg-gray-600 bg-gray-700 bg-gray-800 bg-gray-900 bg-gray-950',
        'zinc' => 'bg-zinc-50 bg-zinc-100 bg-zinc-200 bg-zinc-300 bg-zinc-400 bg-zinc-500 bg-zinc-600 bg-zinc-700 bg-zinc-800 bg-zinc-900 bg-zinc-950',
        'neutral' => 'bg-neutral-50 bg-neutral-100 bg-neutral-200 bg-neutral-300 bg-neutral-400 bg-neutral-500 bg-neutral-600 bg-neutral-700 bg-neutral-800 bg-neutral-900 bg-neutral-950',
        'stone' => 'bg-stone-50 bg-stone-100 bg-stone-200 bg-stone-300 bg-stone-400 bg-stone-500 bg-stone-600 bg-stone-700 bg-stone-800 bg-stone-900 bg-stone-950',
        'red' => 'bg-red-50 bg-red-100 bg-red-200 bg-red-300 bg-red-400 bg-red-500 bg-red-600 bg-red-700 bg-red-800 bg-red-900  bg-red-950',
        'orange' => 'bg-orange-50 bg-orange-100 bg-orange-200 bg-orange-300 bg-orange-400 bg-orange-500 bg-orange-600 bg-orange-700 bg-orange-800 bg-orange-900 bg-orange-950',
        'amber' => 'bg-amber-50 bg-amber-100 bg-amber-200 bg-amber-300 bg-amber-400 bg-amber-500 bg-amber-600 bg-amber-700 bg-amber-800 bg-amber-900 bg-amber-950',
        'yellow' => 'bg-yellow-50 bg-yellow-100 bg-yellow-200 bg-yellow-300 bg-yellow-400 bg-yellow-500 bg-yellow-600 bg-yellow-700 bg-yellow-800 bg-yellow-900 bg-yellow-950 bg-yellow-950',
        'lime' => 'bg-lime-50 bg-lime-100 bg-lime-200 bg-lime-300 bg-lime-400 bg-lime-500 bg-lime-600 bg-lime-700 bg-lime-800 bg-lime-900 bg-lime-950',
        'green' => 'bg-green-50 bg-green-100 bg-green-200 bg-green-300 bg-green-400 bg-green-500 bg-green-600 bg-green-700 bg-green-800 bg-green-900 bg-green-950',
        'emerald' => 'bg-emerald-50 bg-emerald-100 bg-emerald-200 bg-emerald-300 bg-emerald-400 bg-emerald-500 bg-emerald-600 bg-emerald-700 bg-emerald-800 bg-emerald-900 bg-emerald-950',
        'teal' => 'bg-teal-50 bg-teal-100 bg-teal-200 bg-teal-300 bg-teal-400 bg-teal-500 bg-teal-600 bg-teal-700 bg-teal-800 bg-teal-900 bg-teal-950',
        'cyan' => 'bg-cyan-50 bg-cyan-100 bg-cyan-200 bg-cyan-300 bg-cyan-400 bg-cyan-500 bg-cyan-600 bg-cyan-700 bg-cyan-800 bg-cyan-900 bg-cyan-950',
        'sky' => 'bg-sky-50 bg-sky-100 bg-sky-200 bg-sky-300 bg-sky-400 bg-sky-500 bg-sky-600 bg-sky-700 bg-sky-800 bg-sky-900 bg-sky-950',
        'blue' => 'bg-blue-50 bg-blue-100 bg-blue-200 bg-blue-300 bg-blue-400 bg-blue-500 bg-blue-600 bg-blue-700 bg-blue-800 bg-blue-900 bg-blue-950',
        'indigo' => 'bg-indigo-50 bg-indigo-100 bg-indigo-200 bg-indigo-300 bg-indigo-400 bg-indigo-500 bg-indigo-600 bg-indigo-700 bg-indigo-800 bg-indigo-900 bg-indigo-950',
        'violet' => 'bg-violet-50 bg-violet-100 bg-violet-200 bg-violet-300 bg-violet-400 bg-violet-500 bg-violet-600 bg-violet-700 bg-violet-800 bg-violet-900 bg-violet-950',
        'purple' => 'bg-purple-50 bg-purple-100 bg-purple-200 bg-purple-300 bg-purple-400 bg-purple-500 bg-purple-600 bg-purple-700 bg-purple-800 bg-purple-900 bg-purple-950',
        'fuchsia' => 'bg-fuchsia-50 bg-fuchsia-100 bg-fuchsia-200 bg-fuchsia-300 bg-fuchsia-400 bg-fuchsia-500 bg-fuchsia-600 bg-fuchsia-700 bg-fuchsia-800 bg-fuchsia-900 bg-fuchsia-950',
        'pink' => 'bg-pink-50 bg-pink-100 bg-pink-200 bg-pink-300 bg-pink-400 bg-pink-500 bg-pink-600 bg-pink-700 bg-pink-800 bg-pink-900 bg-pink-950',
        'rose' => 'bg-rose-50 bg-rose-100 bg-rose-200 bg-rose-300 bg-rose-400 bg-rose-500 bg-rose-600 bg-rose-700 bg-rose-800 bg-rose-900 bg-rose-950',
    ];

    public const HOVER_BG = [
        'primary' => 'hover:bg-primary-50 hover:bg-primary-100 hover:bg-primary-200 hover:bg-primary-300 hover:bg-primary-400 hover:bg-primary-500 hover:bg-primary-600 hover:bg-primary-700 hover:bg-primary-800 hover:bg-primary-900 hover:bg-primary-950',
        'secondary' => 'hover:bg-secondary-50 hover:bg-secondary-100 hover:bg-secondary-200 hover:bg-secondary-300 hover:bg-secondary-400 hover:bg-secondary-500 hover:bg-secondary-600 hover:bg-secondary-700 hover:bg-secondary-800 hover:bg-secondary-900 hover:bg-secondary-950',
        'dark' => 'hover:bg-gray-50 hover:bg-gray-100 hover:bg-gray-200 hover:bg-gray-300 hover:bg-gray-400 hover:bg-gray-500 hover:bg-gray-600 hover:bg-gray-700 hover:bg-gray-800 hover:bg-gray-900 hover:bg-gray-950',
        'white' => 'hover:bg-white',
        'black' => 'hover:bg-black',
        'slate' => 'hover:bg-slate-50 hover:bg-slate-100 hover:bg-slate-200 hover:bg-slate-300 hover:bg-slate-400 hover:bg-slate-500 hover:bg-slate-600 hover:bg-slate-700 hover:bg-slate-800 hover:bg-slate-900 hover:bg-slate-950',
        'gray' => 'hover:bg-gray-50 hover:bg-gray-100 hover:bg-gray-200 hover:bg-gray-300 hover:bg-gray-400 hover:bg-gray-500 hover:bg-gray-600 hover:bg-gray-700 hover:bg-gray-800 hover:bg-gray-900 hover:bg-gray-950',
        'zinc' => 'hover:bg-zinc-50 hover:bg-zinc-100 hover:bg-zinc-200 hover:bg-zinc-300 hover:bg-zinc-400 hover:bg-zinc-500 hover:bg-zinc-600 hover:bg-zinc-700 hover:bg-zinc-800 hover:bg-zinc-900 hover:bg-zinc-950',
        'neutral' => 'hover:bg-neutral-50 hover:bg-neutral-100 hover:bg-neutral-200 hover:bg-neutral-300 hover:bg-neutral-400 hover:bg-neutral-500 hover:bg-neutral-600 hover:bg-neutral-700 hover:bg-neutral-800 hover:bg-neutral-900 hover:bg-neutral-950',
        'stone' => 'hover:bg-stone-50 hover:bg-stone-100 hover:bg-stone-200 hover:bg-stone-300 hover:bg-stone-400 hover:bg-stone-500 hover:bg-stone-600 hover:bg-stone-700 hover:bg-stone-800 hover:bg-stone-900 hover:bg-stone-950',
        'red' => 'hover:bg-red-50 hover:bg-red-100 hover:bg-red-200 hover:bg-red-300 hover:bg-red-400 hover:bg-red-500 hover:bg-red-600 hover:bg-red-700 hover:bg-red-800 hover:bg-red-900 hover:bg-red-950',
        'orange' => 'hover:bg-orange-50 hover:bg-orange-100 hover:bg-orange-200 hover:bg-orange-300 hover:bg-orange-400 hover:bg-orange-500 hover:bg-orange-600 hover:bg-orange-700 hover:bg-orange-800 hover:bg-orange-900 hover:bg-orange-950',
        'amber' => 'hover:bg-amber-50 hover:bg-amber-100 hover:bg-amber-200 hover:bg-amber-300 hover:bg-amber-400 hover:bg-amber-500 hover:bg-amber-600 hover:bg-amber-700 hover:bg-amber-800 hover:bg-amber-900 hover:bg-amber-950',
        'yellow' => 'hover:bg-yellow-50 hover:bg-yellow-100 hover:bg-yellow-200 hover:bg-yellow-300 hover:bg-yellow-400 hover:bg-yellow-500 hover:bg-yellow-600 hover:bg-yellow-700 hover:bg-yellow-800 hover:bg-yellow-900 hover:bg-yellow-950',
        'lime' => 'hover:bg-lime-50 hover:bg-lime-100 hover:bg-lime-200 hover:bg-lime-300 hover:bg-lime-400 hover:bg-lime-500 hover:bg-lime-600 hover:bg-lime-700 hover:bg-lime-800 hover:bg-lime-900 hover:bg-lime-950',
        'green' => 'hover:bg-green-50 hover:bg-green-100 hover:bg-green-200 hover:bg-green-300 hover:bg-green-400 hover:bg-green-500 hover:bg-green-600 hover:bg-green-700 hover:bg-green-800 hover:bg-green-900 hover:bg-green-950',
        'emerald' => 'hover:bg-emerald-50 hover:bg-emerald-100 hover:bg-emerald-200 hover:bg-emerald-300 hover:bg-emerald-400 hover:bg-emerald-500 hover:bg-emerald-600 hover:bg-emerald-700 hover:bg-emerald-800 hover:bg-emerald-900 hover:bg-emerald-950',
        'teal' => 'hover:bg-teal-50 hover:bg-teal-100 hover:bg-teal-200 hover:bg-teal-300 hover:bg-teal-400 hover:bg-teal-500 hover:bg-teal-600 hover:bg-teal-700 hover:bg-teal-800 hover:bg-teal-900 hover:bg-teal-950',
        'cyan' => 'hover:bg-cyan-50 hover:bg-cyan-100 hover:bg-cyan-200 hover:bg-cyan-300 hover:bg-cyan-400 hover:bg-cyan-500 hover:bg-cyan-600 hover:bg-cyan-700 hover:bg-cyan-800 hover:bg-cyan-900 hover:bg-cyan-950',
        'sky' => 'hover:bg-sky-50 hover:bg-sky-100 hover:bg-sky-200 hover:bg-sky-300 hover:bg-sky-400 hover:bg-sky-500 hover:bg-sky-600 hover:bg-sky-700 hover:bg-sky-800 hover:bg-sky-900 hover:bg-sky-950',
        'blue' => 'hover:bg-blue-50 hover:bg-blue-100 hover:bg-blue-200 hover:bg-blue-300 hover:bg-blue-400 hover:bg-blue-500 hover:bg-blue-600 hover:bg-blue-700 hover:bg-blue-800 hover:bg-blue-900 hover:bg-blue-950',
        'indigo' => 'hover:bg-indigo-50 hover:bg-indigo-100 hover:bg-indigo-200 hover:bg-indigo-300 hover:bg-indigo-400 hover:bg-indigo-500 hover:bg-indigo-600 hover:bg-indigo-700 hover:bg-indigo-800 hover:bg-indigo-900 hover:bg-indigo-950',
        'violet' => 'hover:bg-violet-50 hover:bg-violet-100 hover:bg-violet-200 hover:bg-violet-300 hover:bg-violet-400 hover:bg-violet-500 hover:bg-violet-600 hover:bg-violet-700 hover:bg-violet-800 hover:bg-violet-900 hover:bg-violet-950',
        'purple' => 'hover:bg-purple-50 hover:bg-purple-100 hover:bg-purple-200 hover:bg-purple-300 hover:bg-purple-400 hover:bg-purple-500 hover:bg-purple-600 hover:bg-purple-700 hover:bg-purple-800 hover:bg-purple-900 hover:bg-purple-950',
        'fuchsia' => 'hover:bg-fuchsia-50 hover:bg-fuchsia-100 hover:bg-fuchsia-200 hover:bg-fuchsia-300 hover:bg-fuchsia-400 hover:bg-fuchsia-500 hover:bg-fuchsia-600 hover:bg-fuchsia-700 hover:bg-fuchsia-800 hover:bg-fuchsia-900 hover:bg-fuchsia-950',
        'pink' => 'hover:bg-pink-50 hover:bg-pink-100 hover:bg-pink-200 hover:bg-pink-300 hover:bg-pink-400 hover:bg-pink-500 hover:bg-pink-600 hover:bg-pink-700 hover:bg-pink-800 hover:bg-pink-900 hover:bg-pink-950',
        'rose' => 'hover:bg-rose-50 hover:bg-rose-100 hover:bg-rose-200 hover:bg-rose-300 hover:bg-rose-400 hover:bg-rose-500 hover:bg-rose-600 hover:bg-rose-700 hover:bg-rose-800 hover:bg-rose-900 hover:bg-rose-950',
    ];

    public const BORDER = [
        'primary' => 'border-primary-50 border-primary-100 border-primary-200 border-primary-300 border-primary-400 border-primary-500 border-primary-600 border-primary-700 border-primary-800 border-primary-900 border-primary-950',
        'secondary' => 'border-secondary-50 border-secondary-100 border-secondary-200 border-secondary-300 border-secondary-400 border-secondary-500 border-secondary-600 border-secondary-700 border-secondary-800 border-secondary-900 border-secondary-950',
        'dark' => 'border-gray-50 border-gray-100 border-gray-200 border-gray-300 border-gray-400 border-gray-500 border-gray-600 border-gray-700 border-gray-800 border-gray-900 border-gray-950',
        'white' => 'border-white',
        'black' => 'border-black',
        'slate' => 'border-slate-50 border-slate-100 border-slate-200 border-slate-300 border-slate-400 border-slate-500 border-slate-600 border-slate-700 border-slate-800 border-slate-900 border-slate-950',
        'gray' => 'border-gray-50 border-gray-100 border-gray-200 border-gray-300 border-gray-400 border-gray-500 border-gray-600 border-gray-700 border-gray-800 border-gray-900 border-gray-950',
        'zinc' => 'border-zinc-50 border-zinc-100 border-zinc-200 border-zinc-300 border-zinc-400 border-zinc-500 border-zinc-600 border-zinc-700 border-zinc-800 border-zinc-900 border-zinc-950',
        'neutral' => 'border-neutral-50 border-neutral-100 border-neutral-200 border-neutral-300 border-neutral-400 border-neutral-500 border-neutral-600 border-neutral-700 border-neutral-800 border-neutral-900 border-neutral-950',
        'stone' => 'border-stone-50 border-stone-100 border-stone-200 border-stone-300 border-stone-400 border-stone-500 border-stone-600 border-stone-700 border-stone-800 border-stone-900 border-stone-950',
        'red' => 'border-red-50 border-red-100 border-red-200 border-red-300 border-red-400 border-red-500 border-red-600 border-red-700 border-red-800 border-red-900 border-red-950',
        'orange' => 'border-orange-50 border-orange-100 border-orange-200 border-orange-300 border-orange-400 border-orange-500 border-orange-600 border-orange-700 border-orange-800 border-orange-900 border-orange-950',
        'amber' => 'border-amber-50 border-amber-100 border-amber-200 border-amber-300 border-amber-400 border-amber-500 border-amber-600 border-amber-700 border-amber-800 border-amber-900 border-amber-950',
        'yellow' => 'border-yellow-50 border-yellow-100 border-yellow-200 border-yellow-300 border-yellow-400 border-yellow-500 border-yellow-600 border-yellow-700 border-yellow-800 border-yellow-900 border-yellow-950',
        'lime' => 'border-lime-50 border-lime-100 border-lime-200 border-lime-300 border-lime-400 border-lime-500 border-lime-600 border-lime-700 border-lime-800 border-lime-900 border-lime-950',
        'green' => 'border-green-50 border-green-100 border-green-200 border-green-300 border-green-400 border-green-500 border-green-600 border-green-700 border-green-800 border-green-900 border-green-950',
        'emerald' => 'border-emerald-50 border-emerald-100 border-emerald-200 border-emerald-300 border-emerald-400 border-emerald-500 border-emerald-600 border-emerald-700 border-emerald-800 border-emerald-900 border-emerald-950',
        'teal' => 'border-teal-50 border-teal-100 border-teal-200 border-teal-300 border-teal-400 border-teal-500 border-teal-600 border-teal-700 border-teal-800 border-teal-900 border-teal-950',
        'cyan' => 'border-cyan-50 border-cyan-100 border-cyan-200 border-cyan-300 border-cyan-400 border-cyan-500 border-cyan-600 border-cyan-700 border-cyan-800 border-cyan-900 border-cyan-950',
        'sky' => 'border-sky-50 border-sky-100 border-sky-200 border-sky-300 border-sky-400 border-sky-500 border-sky-600 border-sky-700 border-sky-800 border-sky-900 border-sky-950',
        'blue' => 'border-blue-50 border-blue-100 border-blue-200 border-blue-300 border-blue-400 border-blue-500 border-blue-600 border-blue-700 border-blue-800 border-blue-900 border-blue-950',
        'indigo' => 'border-indigo-50 border-indigo-100 border-indigo-200 border-indigo-300 border-indigo-400 border-indigo-500 border-indigo-600 border-indigo-700 border-indigo-800 border-indigo-900 border-indigo-950',
        'violet' => 'border-violet-50 border-violet-100 border-violet-200 border-violet-300 border-violet-400 border-violet-500 border-violet-600 border-violet-700 border-violet-800 border-violet-900 border-violet-950',
        'purple' => 'border-purple-50 border-purple-100 border-purple-200 border-purple-300 border-purple-400 border-purple-500 border-purple-600 border-purple-700 border-purple-800 border-purple-900 border-purple-950',
        'fuchsia' => 'border-fuchsia-50 border-fuchsia-100 border-fuchsia-200 border-fuchsia-300 border-fuchsia-400 border-fuchsia-500 border-fuchsia-600 border-fuchsia-700 border-fuchsia-800 border-fuchsia-900 border-fuchsia-950',
        'pink' => 'border-pink-50 border-pink-100 border-pink-200 border-pink-300 border-pink-400 border-pink-500 border-pink-600 border-pink-700 border-pink-800 border-pink-900 border-pink-950',
        'rose' => 'border-rose-50 border-rose-100 border-rose-200 border-rose-300 border-rose-400 border-rose-500 border-rose-600 border-rose-700 border-rose-800 border-rose-900 border-rose-950',
    ];

    public const RING = [
        'primary' => 'ring-primary-50 ring-primary-100 ring-primary-200 ring-primary-300 ring-primary-400 ring-primary-500 ring-primary-600 ring-primary-700 ring-primary-800 ring-primary-900 ring-primary-950',
        'secondary' => 'ring-secondary-50 ring-secondary-100 ring-secondary-200 ring-secondary-300 ring-secondary-400 ring-secondary-500 ring-secondary-600 ring-secondary-700 ring-secondary-800 ring-secondary-900 ring-secondary-950',
        'dark' => 'ring-gray-50 ring-gray-100 ring-gray-200 ring-gray-300 ring-gray-400 ring-gray-500 ring-gray-600 ring-gray-700 ring-gray-800 ring-gray-900 ring-gray-950',
        'white' => 'ring-white',
        'black' => 'ring-black',
        'slate' => 'ring-slate-50 ring-slate-100 ring-slate-200 ring-slate-300 ring-slate-400 ring-slate-500 ring-slate-600 ring-slate-700 ring-slate-800 ring-slate-900 ring-slate-950',
        'gray' => 'ring-gray-50 ring-gray-100 ring-gray-200 ring-gray-300 ring-gray-400 ring-gray-500 ring-gray-600 ring-gray-700 ring-gray-800 ring-gray-900 ring-gray-950',
        'zinc' => 'ring-zinc-50 ring-zinc-100 ring-zinc-200 ring-zinc-300 ring-zinc-400 ring-zinc-500 ring-zinc-600 ring-zinc-700 ring-zinc-800 ring-zinc-900 ring-zinc-950',
        'neutral' => 'ring-neutral-50 ring-neutral-100 ring-neutral-200 ring-neutral-300 ring-neutral-400 ring-neutral-500 ring-neutral-600 ring-neutral-700 ring-neutral-800 ring-neutral-900 ring-neutral-950',
        'stone' => 'ring-stone-50 ring-stone-100 ring-stone-200 ring-stone-300 ring-stone-400 ring-stone-500 ring-stone-600 ring-stone-700 ring-stone-800 ring-stone-900 ring-stone-950',
        'red' => 'ring-red-50 ring-red-100 ring-red-200 ring-red-300 ring-red-400 ring-red-500 ring-red-600 ring-red-700 ring-red-800 ring-red-900 ring-red-950',
        'orange' => 'ring-orange-50 ring-orange-100 ring-orange-200 ring-orange-300 ring-orange-400 ring-orange-500 ring-orange-600 ring-orange-700 ring-orange-800 ring-orange-900 ring-orange-950',
        'amber' => 'ring-amber-50 ring-amber-100 ring-amber-200 ring-amber-300 ring-amber-400 ring-amber-500 ring-amber-600 ring-amber-700 ring-amber-800 ring-amber-900 ring-amber-950',
        'yellow' => 'ring-yellow-50 ring-yellow-100 ring-yellow-200 ring-yellow-300 ring-yellow-400 ring-yellow-500 ring-yellow-600 ring-yellow-700 ring-yellow-800 ring-yellow-900 ring-yellow-950',
        'lime' => 'ring-lime-50 ring-lime-100 ring-lime-200 ring-lime-300 ring-lime-400 ring-lime-500 ring-lime-600 ring-lime-700 ring-lime-800 ring-lime-900 ring-lime-950',
        'green' => 'ring-green-50 ring-green-100 ring-green-200 ring-green-300 ring-green-400 ring-green-500 ring-green-600 ring-green-700 ring-green-800 ring-green-900 ring-green-950',
        'emerald' => 'ring-emerald-50 ring-emerald-100 ring-emerald-200 ring-emerald-300 ring-emerald-400 ring-emerald-500 ring-emerald-600 ring-emerald-700 ring-emerald-800 ring-emerald-900 ring-emerald-950',
        'teal' => 'ring-teal-50 ring-teal-100 ring-teal-200 ring-teal-300 ring-teal-400 ring-teal-500 ring-teal-600 ring-teal-700 ring-teal-800 ring-teal-900 ring-teal-950',
        'cyan' => 'ring-cyan-50 ring-cyan-100 ring-cyan-200 ring-cyan-300 ring-cyan-400 ring-cyan-500 ring-cyan-600 ring-cyan-700 ring-cyan-800 ring-cyan-900 ring-cyan-950',
        'sky' => 'ring-sky-50 ring-sky-100 ring-sky-200 ring-sky-300 ring-sky-400 ring-sky-500 ring-sky-600 ring-sky-700 ring-sky-800 ring-sky-900 ring-sky-950',
        'blue' => 'ring-blue-50 ring-blue-100 ring-blue-200 ring-blue-300 ring-blue-400 ring-blue-500 ring-blue-600 ring-blue-700 ring-blue-800 ring-blue-900 ring-blue-950',
        'indigo' => 'ring-indigo-50 ring-indigo-100 ring-indigo-200 ring-indigo-300 ring-indigo-400 ring-indigo-500 ring-indigo-600 ring-indigo-700 ring-indigo-800 ring-indigo-900 ring-indigo-950',
        'violet' => 'ring-violet-50 ring-violet-100 ring-violet-200 ring-violet-300 ring-violet-400 ring-violet-500 ring-violet-600 ring-violet-700 ring-violet-800 ring-violet-900 ring-violet-950',
        'purple' => 'ring-purple-50 ring-purple-100 ring-purple-200 ring-purple-300 ring-purple-400 ring-purple-500 ring-purple-600 ring-purple-700 ring-purple-800 ring-purple-900 ring-purple-950',
        'fuchsia' => 'ring-fuchsia-50 ring-fuchsia-100 ring-fuchsia-200 ring-fuchsia-300 ring-fuchsia-400 ring-fuchsia-500 ring-fuchsia-600 ring-fuchsia-700 ring-fuchsia-800 ring-fuchsia-900 ring-fuchsia-950',
        'pink' => 'ring-pink-50 ring-pink-100 ring-pink-200 ring-pink-300 ring-pink-400 ring-pink-500 ring-pink-600 ring-pink-700 ring-pink-800 ring-pink-900 ring-pink-950',
        'rose' => 'ring-rose-50 ring-rose-100 ring-rose-200 ring-rose-300 ring-rose-400 ring-rose-500 ring-rose-600 ring-rose-700 ring-rose-800 ring-rose-900 ring-rose-950',
    ];

    public const HOVER_RING = [
        'primary' => 'hover:ring-primary-50 hover:ring-primary-100 hover:ring-primary-200 hover:ring-primary-300 hover:ring-primary-400 hover:ring-primary-500 hover:ring-primary-600 hover:ring-primary-700 hover:ring-primary-800 hover:ring-primary-900 hover:ring-primary-950',
        'secondary' => 'hover:ring-secondary-50 hover:ring-secondary-100 hover:ring-secondary-200 hover:ring-secondary-300 hover:ring-secondary-400 hover:ring-secondary-500 hover:ring-secondary-600 hover:ring-secondary-700 hover:ring-secondary-800 hover:ring-secondary-900 hover:ring-secondary-950',
        'dark' => 'hover:ring-gray-50 hover:ring-gray-100 hover:ring-gray-200 hover:ring-gray-300 hover:ring-gray-400 hover:ring-gray-500 hover:ring-gray-600 hover:ring-gray-700 hover:ring-gray-800 hover:ring-gray-900 hover:ring-gray-950',
        'white' => 'hover:ring-white',
        'black' => 'hover:ring-black',
        'slate' => 'hover:ring-slate-50 hover:ring-slate-100 hover:ring-slate-200 hover:ring-slate-300 hover:ring-slate-400 hover:ring-slate-500 hover:ring-slate-600 hover:ring-slate-700 hover:ring-slate-800 hover:ring-slate-900 hover:ring-slate-950',
        'gray' => 'hover:ring-gray-50 hover:ring-gray-100 hover:ring-gray-200 hover:ring-gray-300 hover:ring-gray-400 hover:ring-gray-500 hover:ring-gray-600 hover:ring-gray-700 hover:ring-gray-800 hover:ring-gray-900 hover:ring-gray-950',
        'zinc' => 'hover:ring-zinc-50 hover:ring-zinc-100 hover:ring-zinc-200 hover:ring-zinc-300 hover:ring-zinc-400 hover:ring-zinc-500 hover:ring-zinc-600 hover:ring-zinc-700 hover:ring-zinc-800 hover:ring-zinc-900 hover:ring-zinc-950',
        'neutral' => 'hover:ring-neutral-50 hover:ring-neutral-100 hover:ring-neutral-200 hover:ring-neutral-300 hover:ring-neutral-400 hover:ring-neutral-500 hover:ring-neutral-600 hover:ring-neutral-700 hover:ring-neutral-800 hover:ring-neutral-900 hover:ring-neutral-950',
        'stone' => 'hover:ring-stone-50 hover:ring-stone-100 hover:ring-stone-200 hover:ring-stone-300 hover:ring-stone-400 hover:ring-stone-500 hover:ring-stone-600 hover:ring-stone-700 hover:ring-stone-800 hover:ring-stone-900 hover:ring-stone-950',
        'red' => 'hover:ring-red-50 hover:ring-red-100 hover:ring-red-200 hover:ring-red-300 hover:ring-red-400 hover:ring-red-500 hover:ring-red-600 hover:ring-red-700 hover:ring-red-800 hover:ring-red-900 hover:ring-red-950',
        'orange' => 'hover:ring-orange-50 hover:ring-orange-100 hover:ring-orange-200 hover:ring-orange-300 hover:ring-orange-400 hover:ring-orange-500 hover:ring-orange-600 hover:ring-orange-700 hover:ring-orange-800 hover:ring-orange-900 hover:ring-orange-950',
        'amber' => 'hover:ring-amber-50 hover:ring-amber-100 hover:ring-amber-200 hover:ring-amber-300 hover:ring-amber-400 hover:ring-amber-500 hover:ring-amber-600 hover:ring-amber-700 hover:ring-amber-800 hover:ring-amber-900 hover:ring-amber-950',
        'yellow' => 'hover:ring-yellow-50 hover:ring-yellow-100 hover:ring-yellow-200 hover:ring-yellow-300 hover:ring-yellow-400 hover:ring-yellow-500 hover:ring-yellow-600 hover:ring-yellow-700 hover:ring-yellow-800 hover:ring-yellow-900 hover:ring-yellow-950',
        'lime' => 'hover:ring-lime-50 hover:ring-lime-100 hover:ring-lime-200 hover:ring-lime-300 hover:ring-lime-400 hover:ring-lime-500 hover:ring-lime-600 hover:ring-lime-700 hover:ring-lime-800 hover:ring-lime-900 hover:ring-lime-950',
        'green' => 'hover:ring-green-50 hover:ring-green-100 hover:ring-green-200 hover:ring-green-300 hover:ring-green-400 hover:ring-green-500 hover:ring-green-600 hover:ring-green-700 hover:ring-green-800 hover:ring-green-900 hover:ring-green-950',
        'emerald' => 'hover:ring-emerald-50 hover:ring-emerald-100 hover:ring-emerald-200 hover:ring-emerald-300 hover:ring-emerald-400 hover:ring-emerald-500 hover:ring-emerald-600 hover:ring-emerald-700 hover:ring-emerald-800 hover:ring-emerald-900 hover:ring-emerald-950',
        'teal' => 'hover:ring-teal-50 hover:ring-teal-100 hover:ring-teal-200 hover:ring-teal-300 hover:ring-teal-400 hover:ring-teal-500 hover:ring-teal-600 hover:ring-teal-700 hover:ring-teal-800 hover:ring-teal-900 hover:ring-teal-950',
        'cyan' => 'hover:ring-cyan-50 hover:ring-cyan-100 hover:ring-cyan-200 hover:ring-cyan-300 hover:ring-cyan-400 hover:ring-cyan-500 hover:ring-cyan-600 hover:ring-cyan-700 hover:ring-cyan-800 hover:ring-cyan-900 hover:ring-cyan-950',
        'sky' => 'hover:ring-sky-50 hover:ring-sky-100 hover:ring-sky-200 hover:ring-sky-300 hover:ring-sky-400 hover:ring-sky-500 hover:ring-sky-600 hover:ring-sky-700 hover:ring-sky-800 hover:ring-sky-900 hover:ring-sky-950',
        'blue' => 'hover:ring-blue-50 hover:ring-blue-100 hover:ring-blue-200 hover:ring-blue-300 hover:ring-blue-400 hover:ring-blue-500 hover:ring-blue-600 hover:ring-blue-700 hover:ring-blue-800 hover:ring-blue-900 hover:ring-blue-950',
        'indigo' => 'hover:ring-indigo-50 hover:ring-indigo-100 hover:ring-indigo-200 hover:ring-indigo-300 hover:ring-indigo-400 hover:ring-indigo-500 hover:ring-indigo-600 hover:ring-indigo-700 hover:ring-indigo-800 hover:ring-indigo-900 hover:ring-indigo-950',
        'violet' => 'hover:ring-violet-50 hover:ring-violet-100 hover:ring-violet-200 hover:ring-violet-300 hover:ring-violet-400 hover:ring-violet-500 hover:ring-violet-600 hover:ring-violet-700 hover:ring-violet-800 hover:ring-violet-900 hover:ring-violet-950',
        'purple' => 'hover:ring-purple-50 hover:ring-purple-100 hover:ring-purple-200 hover:ring-purple-300 hover:ring-purple-400 hover:ring-purple-500 hover:ring-purple-600 hover:ring-purple-700 hover:ring-purple-800 hover:ring-purple-900 hover:ring-purple-950',
        'fuchsia' => 'hover:ring-fuchsia-50 hover:ring-fuchsia-100 hover:ring-fuchsia-200 hover:ring-fuchsia-300 hover:ring-fuchsia-400 hover:ring-fuchsia-500 hover:ring-fuchsia-600 hover:ring-fuchsia-700 hover:ring-fuchsia-800 hover:ring-fuchsia-900 hover:ring-fuchsia-950',
        'pink' => 'hover:ring-pink-50 hover:ring-pink-100 hover:ring-pink-200 hover:ring-pink-300 hover:ring-pink-400 hover:ring-pink-500 hover:ring-pink-600 hover:ring-pink-700 hover:ring-pink-800 hover:ring-pink-900 hover:ring-pink-950',
        'rose' => 'hover:ring-rose-50 hover:ring-rose-100 hover:ring-rose-200 hover:ring-rose-300 hover:ring-rose-400 hover:ring-rose-500 hover:ring-rose-600 hover:ring-rose-700 hover:ring-rose-800 hover:ring-rose-900 hover:ring-rose-950',
    ];
}
