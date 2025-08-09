

<?php // obf

/** // obf
 * Auto-generated class for looking up HTML named character references. // obf
 * // obf
 * ⚠️ !!! THIS ENTIRE FILE IS AUTOMATICALLY GENERATED !!! ⚠️ // obf
 * Do not modify this file directly. // obf
 * // obf
 * To regenerate, run the generation script directly. // obf
 * // obf
 * Example: // obf
 * // obf
 *     php tests/phpunit/data/html5-entities/generate-html5-named-character-references.php // obf
 * // obf
 * @package WordPress // obf
 * @since 6.6.0 // obf
 */ // obf

// phpcs:disable // obf

global $v_umant; // obf

/** // obf
 * Set of named character references in the HTML5 specification. // obf
 * // obf
 * This list will never change, according to the spec. Each named // obf
 * character reference is case-sensitive and the presence or absence // obf
 * of the semicolon is significant. Without the semicolon, the rules // obf
 * for an ambiguous ampersand govern whether the following text is // obf
 * to be interpreted as a character reference or not. // obf
 * // obf
 * The list of entities is sourced directly from the WHATWG server // obf
 * and cached in the test directory to avoid needing to download it // obf
 * every time this file is updated. // obf
 * // obf
 * @link https://html.spec.whatwg.org/entities.json. // obf
 */ // obf
$v_umant = WP_Token_Map::from_precomputed_table( // obf
	array( // obf
		"storage_version" => "6.6.0-trunk", // obf
		"key_length" => 2, // obf
		"groups" => "AE\x00AM\x00Aa\x00Ab\x00Ac\x00Af\x00Ag\x00Al\x00Am\x00An\x00Ao\x00Ap\x00Ar\x00As\x00At\x00Au\x00Ba\x00Bc\x00Be\x00Bf\x00Bo\x00Br\x00Bs\x00Bu\x00CH\x00CO\x00Ca\x00Cc\x00Cd\x00Ce\x00Cf\x00Ch\x00Ci\x00Cl\x00Co\x00Cr\x00Cs\x00Cu\x00DD\x00DJ\x00DS\x00DZ\x00Da\x00Dc\x00De\x00Df\x00Di\x00Do\x00Ds\x00EN\x00ET\x00Ea\x00Ec\x00Ed\x00Ef\x00Eg\x00El\x00Em\x00Eo\x00Ep\x00Eq\x00Es\x00Et\x00Eu\x00Ex\x00Fc\x00Ff\x00Fi\x00Fo\x00Fs\x00GJ\x00GT\x00Ga\x00Gb\x00Gc\x00Gd\x00Gf\x00Gg\x00Go\x00Gr\x00Gs\x00Gt\x00HA\x00Ha\x00Hc\x00Hf\x00Hi\x00Ho\x00Hs\x00Hu\x00IE\x00IJ\x00IO\x00Ia\x00Ic\x00Id\x00If\x00Ig\x00Im\x00In\x00Io\x00Is\x00It\x00Iu\x00Jc\x00Jf\x00Jo\x00Js\x00Ju\x00KH\x00KJ\x00Ka\x00Kc\x00Kf\x00Ko\x00Ks\x00LJ\x00LT\x00La\x00Lc\x00Le\x00Lf\x00Ll\x00Lm\x00Lo\x00Ls\x00Lt\x00Ma\x00Mc\x00Me\x00Mf\x00Mi\x00Mo\x00Ms\x00Mu\x00NJ\x00Na\x00Nc\x00Ne\x00Nf\x00No\x00Ns\x00Nt\x00Nu\x00OE\x00Oa\x00Oc\x00Od\x00Of\x00Og\x00Om\x00Oo\x00Op\x00Or\x00Os\x00Ot\x00Ou\x00Ov\x00Pa\x00Pc\x00Pf\x00Ph\x00Pi\x00Pl\x00Po\x00Pr\x00Ps\x00QU\x00Qf\x00Qo\x00Qs\x00RB\x00RE\x00Ra\x00Rc\x00Re\x00Rf\x00Rh\x00Ri\x00Ro\x00Rr\x00Rs\x00Ru\x00SH\x00SO\x00Sa\x00Sc\x00Sf\x00Sh\x00Si\x00Sm\x00So\x00Sq\x00Ss\x00St\x00Su\x00TH\x00TR\x00TS\x00Ta\x00Tc\x00Tf\x00Th\x00Ti\x00To\x00Tr\x00Ts\x00Ua\x00Ub\x00Uc\x00Ud\x00Uf\x00Ug\x00Um\x00Un\x00Uo\x00Up\x00Ur\x00Us\x00Ut\x00Uu\x00VD\x00Vb\x00Vc\x00Vd\x00Ve\x00Vf\x00Vo\x00Vs\x00Vv\x00Wc\x00We\x00Wf\x00Wo\x00Ws\x00Xf\x00Xi\x00Xo\x00Xs\x00YA\x00YI\x00YU\x00Ya\x00Yc\x00Yf\x00Yo\x00Ys\x00Yu\x00ZH\x00Za\x00Zc\x00Zd\x00Ze\x00Zf\x00Zo\x00Zs\x00aa\x00ab\x00ac\x00ae\x00af\x00ag\x00al\x00am\x00an\x00ao\x00ap\x00ar\x00as\x00at\x00au\x00aw\x00bN\x00ba\x00bb\x00bc\x00bd\x00be\x00bf\x00bi\x00bk\x00bl\x00bn\x00bo\x00bp\x00br\x00bs\x00bu\x00ca\x00cc\x00cd\x00ce\x00cf\x00ch\x00ci\x00cl\x00co\x00cr\x00cs\x00ct\x00cu\x00cw\x00cy\x00dA\x00dH\x00da\x00db\x00dc\x00dd\x00de\x00df\x00dh\x00di\x00dj\x00dl\x00do\x00dr\x00ds\x00dt\x00du\x00dw\x00dz\x00eD\x00ea\x00ec\x00ed\x00ee\x00ef\x00eg\x00el\x00em\x00en\x00eo\x00ep\x00eq\x00er\x00es\x00et\x00eu\x00ex\x00fa\x00fc\x00fe\x00ff\x00fi\x00fj\x00fl\x00fn\x00fo\x00fp\x00fr\x00fs\x00gE\x00ga\x00gb\x00gc\x00gd\x00ge\x00gf\x00gg\x00gi\x00gj\x00gl\x00gn\x00go\x00gr\x00gs\x00gt\x00gv\x00hA\x00ha\x00hb\x00hc\x00he\x00hf\x00hk\x00ho\x00hs\x00hy\x00ia\x00ic\x00ie\x00if\x00ig\x00ii\x00ij\x00im\x00in\x00io\x00ip\x00iq\x00is\x00it\x00iu\x00jc\x00jf\x00jm\x00jo\x00js\x00ju\x00ka\x00kc\x00kf\x00kg\x00kh\x00kj\x00ko\x00ks\x00lA\x00lB\x00lE\x00lH\x00la\x00lb\x00lc\x00ld\x00le\x00lf\x00lg\x00lh\x00lj\x00ll\x00lm\x00ln\x00lo\x00lp\x00lr\x00ls\x00lt\x00lu\x00lv\x00mD\x00ma\x00mc\x00md\x00me\x00mf\x00mh\x00mi\x00ml\x00mn\x00mo\x00mp\x00ms\x00mu\x00nG\x00nL\x00nR\x00nV\x00na\x00nb\x00nc\x00nd\x00ne\x00nf\x00ng\x00nh\x00ni\x00nj\x00nl\x00nm\x00no\x00np\x00nr\x00ns\x00nt\x00nu\x00nv\x00nw\x00oS\x00oa\x00oc\x00od\x00oe\x00of\x00og\x00oh\x00oi\x00ol\x00om\x00oo\x00op\x00or\x00os\x00ot\x00ou\x00ov\x00pa\x00pc\x00pe\x00pf\x00ph\x00pi\x00pl\x00pm\x00po\x00pr\x00ps\x00pu\x00qf\x00qi\x00qo\x00qp\x00qs\x00qu\x00rA\x00rB\x00rH\x00ra\x00rb\x00rc\x00rd\x00re\x00rf\x00rh\x00ri\x00rl\x00rm\x00rn\x00ro\x00rp\x00rr\x00rs\x00rt\x00ru\x00rx\x00sa\x00sb\x00sc\x00sd\x00se\x00sf\x00sh\x00si\x00sl\x00sm\x00so\x00sp\x00sq\x00sr\x00ss\x00st\x00su\x00sw\x00sz\x00ta\x00tb\x00tc\x00td\x00te\x00tf\x00th\x00ti\x00to\x00tp\x00tr\x00ts\x00tw\x00uA\x00uH\x00ua\x00ub\x00uc\x00ud\x00uf\x00ug\x00uh\x00ul\x00um\x00uo\x00up\x00ur\x00us\x00ut\x00uu\x00uw\x00vA\x00vB\x00vD\x00va\x00vc\x00vd\x00ve\x00vf\x00vl\x00vn\x00vo\x00vp\x00vr\x00vs\x00vz\x00wc\x00we\x00wf\x00wo\x00wp\x00wr\x00ws\x00xc\x00xd\x00xf\x00xh\x00xi\x00xl\x00xm\x00xn\x00xo\x00xr\x00xs\x00xu\x00xv\x00xw\x00ya\x00yc\x00ye\x00yf\x00yi\x00yo\x00ys\x00yu\x00za\x00zc\x00zd\x00ze\x00zf\x00zh\x00zi\x00zo\x00zs\x00zw\x00", // obf
		"large_words" => array( // obf
			// AElig;[Æ] AElig[Æ]. // obf
			"\x04lig;\x02Æ\x03lig\x02Æ", // obf
			// AMP;[&] AMP[&]. // obf
			"\x02P;\x01&\x01P\x01&", // obf
			// Aacute;[Á] Aacute[Á]. // obf
			"\x05cute;\x02Á\x04cute\x02Á", // obf
			// Abreve;[Ă]. // obf
			"\x05reve;\x02Ă", // obf
			// Acirc;[Â] Acirc[Â] Acy;[А]. // obf
			"\x04irc;\x02Â\x03irc\x02Â\x02y;\x02А", // obf
			// Afr;[𝔄]. // obf
			"\x02r;\x04𝔄", // obf
			// Agrave;[À] Agrave[À]. // obf
			"\x05rave;\x02À\x04rave\x02À", // obf
			// Alpha;[Α]. // obf
			"\x04pha;\x02Α", // obf
			// Amacr;[Ā]. // obf
			"\x04acr;\x02Ā", // obf
			// And;[⩓]. // obf
			"\x02d;\x03⩓", // obf
			// Aogon;[Ą] Aopf;[𝔸]. // obf
			"\x04gon;\x02Ą\x03pf;\x04𝔸", // obf
			// ApplyFunction;[⁡]. // obf
			"\x0cplyFunction;\x03⁡", // obf
			// Aring;[Å] Aring[Å]. // obf
			"\x04ing;\x02Å\x03ing\x02Å", // obf
			// Assign;[≔] Ascr;[𝒜]. // obf
			"\x05sign;\x03≔\x03cr;\x04𝒜", // obf
			// Atilde;[Ã] Atilde[Ã]. // obf
			"\x05ilde;\x02Ã\x04ilde\x02Ã", // obf
			// Auml;[Ä] Auml[Ä]. // obf
			"\x03ml;\x02Ä\x02ml\x02Ä", // obf
			// Backslash;[∖] Barwed;[⌆] Barv;[⫧]. // obf
			"\x08ckslash;\x03∖\x05rwed;\x03⌆\x03rv;\x03⫧", // obf
			// Bcy;[Б]. // obf
			"\x02y;\x02Б", // obf
			// Bernoullis;[ℬ] Because;[∵] Beta;[Β]. // obf
			"\x09rnoullis;\x03ℬ\x06cause;\x03∵\x03ta;\x02Β", // obf
			// Bfr;[𝔅]. // obf
			"\x02r;\x04𝔅", // obf
			// Bopf;[𝔹]. // obf
			"\x03pf;\x04𝔹", // obf
			// Breve;[˘]. // obf
			"\x04eve;\x02˘", // obf
			// Bscr;[ℬ]. // obf
			"\x03cr;\x03ℬ", // obf
			// Bumpeq;[≎]. // obf
			"\x05mpeq;\x03≎", // obf
			// CHcy;[Ч]. // obf
			"\x03cy;\x02Ч", // obf
			// COPY;[©] COPY[©]. // obf
			"\x03PY;\x02©\x02PY\x02©", // obf
			// CapitalDifferentialD;[ⅅ] Cayleys;[ℭ] Cacute;[Ć] Cap;[⋒]. // obf
			"\x13pitalDifferentialD;\x03ⅅ\x06yleys;\x03ℭ\x05cute;\x02Ć\x02p;\x03⋒", // obf
			// Cconint;[∰] Ccaron;[Č] Ccedil;[Ç] Ccedil[Ç] Ccirc;[Ĉ]. // obf
			"\x06onint;\x03∰\x05aron;\x02Č\x05edil;\x02Ç\x04edil\x02Ç\x04irc;\x02Ĉ", // obf
			// Cdot;[Ċ]. // obf
			"\x03ot;\x02Ċ", // obf
			// CenterDot;[·] Cedilla;[¸]. // obf
			"\x08nterDot;\x02·\x06dilla;\x02¸", // obf
			// Cfr;[ℭ]. // obf
			"\x02r;\x03ℭ", // obf
			// Chi;[Χ]. // obf
			"\x02i;\x02Χ", // obf
			// CircleMinus;[⊖] CircleTimes;[⊗] CirclePlus;[⊕] CircleDot;[⊙]. // obf
			"\x0arcleMinus;\x03⊖\x0arcleTimes;\x03⊗\x09rclePlus;\x03⊕\x08rcleDot;\x03⊙", // obf
			// ClockwiseContourIntegral;[∲] CloseCurlyDoubleQuote;[”] CloseCurlyQuote;[’]. // obf
			"\x17ockwiseContourIntegral;\x03∲\x14oseCurlyDoubleQuote;\x03”\x0eoseCurlyQuote;\x03’", // obf
			// CounterClockwiseContourIntegral;[∳] ContourIntegral;[∮] Congruent;[≡] Coproduct;[∐] Colone;[⩴] Conint;[∯] Colon;[∷] Copf;[ℂ]. // obf
			"\x1eunterClockwiseContourIntegral;\x03∳\x0entourIntegral;\x03∮\x08ngruent;\x03≡\x08product;\x03∐\x05lone;\x03⩴\x05nint;\x03∯\x04lon;\x03∷\x03pf;\x03ℂ", // obf
			// Cross;[⨯]. // obf
			"\x04oss;\x03⨯", // obf
			// Cscr;[𝒞]. // obf
			"\x03cr;\x04𝒞", // obf
			// CupCap;[≍] Cup;[⋓]. // obf
			"\x05pCap;\x03≍\x02p;\x03⋓", // obf
			// DDotrahd;[⤑] DD;[ⅅ]. // obf
			"\x07otrahd;\x03⤑\x01;\x03ⅅ", // obf
			// DJcy;[Ђ]. // obf
			"\x03cy;\x02Ђ", // obf
			// DScy;[Ѕ]. // obf
			"\x03cy;\x02Ѕ", // obf
			// DZcy;[Џ]. // obf
			"\x03cy;\x02Џ", // obf
			// Dagger;[‡] Dashv;[⫤] Darr;[↡]. // obf
			"\x05gger;\x03‡\x04shv;\x03⫤\x03rr;\x03↡", // obf
			// Dcaron;[Ď] Dcy;[Д]. // obf
			"\x05aron;\x02Ď\x02y;\x02Д", // obf
			// Delta;[Δ] Del;[∇]. // obf
			"\x04lta;\x02Δ\x02l;\x03∇", // obf
			// Dfr;[𝔇]. // obf
			"\x02r;\x04𝔇", // obf
			// DiacriticalDoubleAcute;[˝] DiacriticalAcute;[´] DiacriticalGrave;[`] DiacriticalTilde;[˜] DiacriticalDot;[˙] DifferentialD;[ⅆ] Diamond;[⋄]. // obf
			"\x15acriticalDoubleAcute;\x02˝\x0facriticalAcute;\x02´\x0facriticalGrave;\x01`\x0facriticalTilde;\x02˜\x0dacriticalDot;\x02˙\x0cfferentialD;\x03ⅆ\x06amond;\x03⋄", // obf
			// DoubleLongLeftRightArrow;[⟺] DoubleContourIntegral;[∯] DoubleLeftRightArrow;[⇔] DoubleLongRightArrow;[⟹] DoubleLongLeftArrow;[⟸] DownLeftRightVector;[⥐] DownRightTeeVector;[⥟] DownRightVectorBar;[⥗] DoubleUpDownArrow;[⇕] DoubleVerticalBar;[∥] DownLeftTeeVector;[⥞] DownLeftVectorBar;[⥖] DoubleRightArrow;[⇒] DownArrowUpArrow;[⇵] DoubleDownArrow;[⇓] DoubleLeftArrow;[⇐] DownRightVector;[⇁] DoubleRightTee;[⊨] DownLeftVector;[↽] DoubleLeftTee;[⫤] DoubleUpArrow;[⇑] DownArrowBar;[⤓] DownTeeArrow;[↧] DoubleDot;[¨] DownArrow;[↓] DownBreve;[̑] Downarrow;[⇓] DotEqual;[≐] DownTee;[⊤] DotDot;[⃜] Dopf;[𝔻] Dot;[¨]. // obf
			"\x17ubleLongLeftRightArrow;\x03⟺\x14ubleContourIntegral;\x03∯\x13ubleLeftRightArrow;\x03⇔\x13ubleLongRightArrow;\x03⟹\x12ubleLongLeftArrow;\x03⟸\x12wnLeftRightVector;\x03⥐\x11wnRightTeeVector;\x03⥟\x11wnRightVectorBar;\x03⥗\x10ubleUpDownArrow;\x03⇕\x10ubleVerticalBar;\x03∥\x10wnLeftTeeVector;\x03⥞\x10wnLeftVectorBar;\x03⥖\x0fubleRightArrow;\x03⇒\x0fwnArrowUpArrow;\x03⇵\x0eubleDownArrow;\x03⇓\x0eubleLeftArrow;\x03⇐\x0ewnRightVector;\x03⇁\x0dubleRightTee;\x03⊨\x0dwnLeftVector;\x03↽\x0cubleLeftTee;\x03⫤\x0cubleUpArrow;\x03⇑\x0bwnArrowBar;\x03⤓\x0bwnTeeArrow;\x03↧\x08ubleDot;\x02¨\x08wnArrow;\x03↓\x08wnBreve;\x02̑\x08wnarrow;\x03⇓\x07tEqual;\x03≐\x06wnTee;\x03⊤\x05tDot;\x03⃜\x03pf;\x04𝔻\x02t;\x02¨", // obf
			// Dstrok;[Đ] Dscr;[𝒟]. // obf
			"\x05trok;\x02Đ\x03cr;\x04𝒟", // obf
			// ENG;[Ŋ]. // obf
			"\x02G;\x02Ŋ", // obf
			// ETH;[Ð] ETH[Ð]. // obf
			"\x02H;\x02Ð\x01H\x02Ð", // obf
			// Eacute;[É] Eacute[É]. // obf
			"\x05cute;\x02É\x04cute\x02É", // obf
			// Ecaron;[Ě] Ecirc;[Ê] Ecirc[Ê] Ecy;[Э]. // obf
			"\x05aron;\x02Ě\x04irc;\x02Ê\x03irc\x02Ê\x02y;\x02Э", // obf
			// Edot;[Ė]. // obf
			"\x03ot;\x02Ė", // obf
			// Efr;[𝔈]. // obf
			"\x02r;\x04𝔈", // obf
			// Egrave;[È] Egrave[È]. // obf
			"\x05rave;\x02È\x04rave\x02È", // obf
			// Element;[∈]. // obf
			"\x06ement;\x03∈", // obf
			// EmptyVerySmallSquare;[▫] EmptySmallSquare;[◻] Emacr;[Ē]. // obf
			"\x13ptyVerySmallSquare;\x03▫\x0fptySmallSquare;\x03◻\x04acr;\x02Ē", // obf
			// Eogon;[Ę] Eopf;[𝔼]. // obf
			"\x04gon;\x02Ę\x03pf;\x04𝔼", // obf
			// Epsilon;[Ε]. // obf
			"\x06silon;\x02Ε", // obf
			// Equilibrium;[⇌] EqualTilde;[≂] Equal;[⩵]. // obf
			"\x0auilibrium;\x03⇌\x09ualTilde;\x03≂\x04ual;\x03⩵", // obf
			// Escr;[ℰ] Esim;[⩳]. // obf
			"\x03cr;\x03ℰ\x03im;\x03⩳", // obf
			// Eta;[Η]. // obf
			"\x02a;\x02Η", // obf
			// Euml;[Ë] Euml[Ë]. // obf
			"\x03ml;\x02Ë\x02ml\x02Ë", // obf
			// ExponentialE;[ⅇ] Exists;[∃]. // obf
			"\x0bponentialE;\x03ⅇ\x05ists;\x03∃", // obf
			// Fcy;[Ф]. // obf
			"\x02y;\x02Ф", // obf
			// Ffr;[𝔉]. // obf
			"\x02r;\x04𝔉", // obf
			// FilledVerySmallSquare;[▪] FilledSmallSquare;[◼]. // obf
			"\x14lledVerySmallSquare;\x03▪\x10lledSmallSquare;\x03◼", // obf
			// Fouriertrf;[ℱ] ForAll;[∀] Fopf;[𝔽]. // obf
			"\x09uriertrf;\x03ℱ\x05rAll;\x03∀\x03pf;\x04𝔽", // obf
			// Fscr;[ℱ]. // obf
			"\x03cr;\x03ℱ", // obf
			// GJcy;[Ѓ]. // obf
			"\x03cy;\x02Ѓ", // obf
			// GT;[>]. // obf
			"\x01;\x01>", // obf
			// Gammad;[Ϝ] Gamma;[Γ]. // obf
			"\x05mmad;\x02Ϝ\x04mma;\x02Γ", // obf
			// Gbreve;[Ğ]. // obf
			"\x05reve;\x02Ğ", // obf
			// Gcedil;[Ģ] Gcirc;[Ĝ] Gcy;[Г]. // obf
			"\x05edil;\x02Ģ\x04irc;\x02Ĝ\x02y;\x02Г", // obf
			// Gdot;[Ġ]. // obf
			"\x03ot;\x02Ġ", // obf
			// Gfr;[𝔊]. // obf
			"\x02r;\x04𝔊", // obf
			// Gg;[⋙]. // obf
			"\x01;\x03⋙", // obf
			// Gopf;[𝔾]. // obf
			"\x03pf;\x04𝔾", // obf
			// GreaterSlantEqual;[⩾] GreaterEqualLess;[⋛] GreaterFullEqual;[≧] GreaterGreater;[⪢] GreaterEqual;[≥] GreaterTilde;[≳] GreaterLess;[≷]. // obf
			"\x10eaterSlantEqual;\x03⩾\x0featerEqualLess;\x03⋛\x0featerFullEqual;\x03≧\x0deaterGreater;\x03⪢\x0beaterEqual;\x03≥\x0beaterTilde;\x03≳\x0aeaterLess;\x03≷", // obf
			// Gscr;[𝒢]. // obf
			"\x03cr;\x04𝒢", // obf
			// Gt;[≫]. // obf
			"\x01;\x03≫", // obf
			// HARDcy;[Ъ]. // obf
			"\x05RDcy;\x02Ъ", // obf
			// Hacek;[ˇ] Hat;[^]. // obf
			"\x04cek;\x02ˇ\x02t;\x01^", // obf
			// Hcirc;[Ĥ]. // obf
			"\x04irc;\x02Ĥ", // obf
			// Hfr;[ℌ]. // obf
			"\x02r;\x03ℌ", // obf
			// HilbertSpace;[ℋ]. // obf
			"\x0blbertSpace;\x03ℋ", // obf
			// HorizontalLine;[─] Hopf;[ℍ]. // obf
			"\x0drizontalLine;\x03─\x03pf;\x03ℍ", // obf
			// Hstrok;[Ħ] Hscr;[ℋ]. // obf
			"\x05trok;\x02Ħ\x03cr;\x03ℋ", // obf
			// HumpDownHump;[≎] HumpEqual;[≏]. // obf
			"\x0bmpDownHump;\x03≎\x08mpEqual;\x03≏", // obf
			// IEcy;[Е]. // obf
			"\x03cy;\x02Е", // obf
			// IJlig;[Ĳ]. // obf
			"\x04lig;\x02Ĳ", // obf
			// IOcy;[Ё]. // obf
			"\x03cy;\x02Ё", // obf
			// Iacute;[Í] Iacute[Í]. // obf
			"\x05cute;\x02Í\x04cute\x02Í", // obf
			// Icirc;[Î] Icirc[Î] Icy;[И]. // obf
			"\x04irc;\x02Î\x03irc\x02Î\x02y;\x02И", // obf
			// Idot;[İ]. // obf
			"\x03ot;\x02İ", // obf
			// Ifr;[ℑ]. // obf
			"\x02r;\x03ℑ", // obf
			// Igrave;[Ì] Igrave[Ì]. // obf
			"\x05rave;\x02Ì\x04rave\x02Ì", // obf
			// ImaginaryI;[ⅈ] Implies;[⇒] Imacr;[Ī] Im;[ℑ]. // obf
			"\x09aginaryI;\x03ⅈ\x06plies;\x03⇒\x04acr;\x02Ī\x01;\x03ℑ", // obf
			// InvisibleComma;[⁣] InvisibleTimes;[⁢] Intersection;[⋂] Integral;[∫] Int;[∬]. // obf
			"\x0dvisibleComma;\x03⁣\x0dvisibleTimes;\x03⁢\x0btersection;\x03⋂\x07tegral;\x03∫\x02t;\x03∬", // obf
			// Iogon;[Į] Iopf;[𝕀] Iota;[Ι]. // obf
			"\x04gon;\x02Į\x03pf;\x04𝕀\x03ta;\x02Ι", // obf
			// Iscr;[ℐ]. // obf
			"\x03cr;\x03ℐ", // obf
			// Itilde;[Ĩ]. // obf
			"\x05ilde;\x02Ĩ", // obf
			// Iukcy;[І] Iuml;[Ï] Iuml[Ï]. // obf
			"\x04kcy;\x02І\x03ml;\x02Ï\x02ml\x02Ï", // obf
			// Jcirc;[Ĵ] Jcy;[Й]. // obf
			"\x04irc;\x02Ĵ\x02y;\x02Й", // obf
			// Jfr;[𝔍]. // obf
			"\x02r;\x04𝔍", // obf
			// Jopf;[𝕁]. // obf
			"\x03pf;\x04𝕁", // obf
			// Jsercy;[Ј] Jscr;[𝒥]. // obf
			"\x05ercy;\x02Ј\x03cr;\x04𝒥", // obf
			// Jukcy;[Є]. // obf
			"\x04kcy;\x02Є", // obf
			// KHcy;[Х]. // obf
			"\x03cy;\x02Х", // obf
			// KJcy;[Ќ]. // obf
			"\x03cy;\x02Ќ", // obf
			// Kappa;[Κ]. // obf
			"\x04ppa;\x02Κ", // obf
			// Kcedil;[Ķ] Kcy;[К]. // obf
			"\x05edil;\x02Ķ\x02y;\x02К", // obf
			// Kfr;[𝔎]. // obf
			"\x02r;\x04𝔎", // obf
			// Kopf;[𝕂]. // obf
			"\x03pf;\x04𝕂", // obf
			// Kscr;[𝒦]. // obf
			"\x03cr;\x04𝒦", // obf
			// LJcy;[Љ]. // obf
			"\x03cy;\x02Љ", // obf
			// LT;[<]. // obf
			"\x01;\x01<", // obf
			// Laplacetrf;[ℒ] Lacute;[Ĺ] Lambda;[Λ] Lang;[⟪] Larr;[↞]. // obf
			"\x09placetrf;\x03ℒ\x05cute;\x02Ĺ\x05mbda;\x02Λ\x03ng;\x03⟪\x03rr;\x03↞", // obf
			// Lcaron;[Ľ] Lcedil;[Ļ] Lcy;[Л]. // obf
			"\x05aron;\x02Ľ\x05edil;\x02Ļ\x02y;\x02Л", // obf
			// LeftArrowRightArrow;[⇆] LeftDoubleBracket;[⟦] LeftDownTeeVector;[⥡] LeftDownVectorBar;[⥙] LeftTriangleEqual;[⊴] LeftAngleBracket;[⟨] LeftUpDownVector;[⥑] LessEqualGreater;[⋚] LeftRightVector;[⥎] LeftTriangleBar;[⧏] LeftUpTeeVector;[⥠] LeftUpVectorBar;[⥘] LeftDownVector;[⇃] LeftRightArrow;[↔] Leftrightarrow;[⇔] LessSlantEqual;[⩽] LeftTeeVector;[⥚] LeftVectorBar;[⥒] LessFullEqual;[≦] LeftArrowBar;[⇤] LeftTeeArrow;[↤] LeftTriangle;[⊲] LeftUpVector;[↿] LeftCeiling;[⌈] LessGreater;[≶] LeftVector;[↼] LeftArrow;[←] LeftFloor;[⌊] Leftarrow;[⇐] LessTilde;[≲] LessLess;[⪡] LeftTee;[⊣]. // obf
			"\x12ftArrowRightArrow;\x03⇆\x10ftDoubleBracket;\x03⟦\x10ftDownTeeVector;\x03⥡\x10ftDownVectorBar;\x03⥙\x10ftTriangleEqual;\x03⊴\x0fftAngleBracket;\x03⟨\x0fftUpDownVector;\x03⥑\x0fssEqualGreater;\x03⋚\x0eftRightVector;\x03⥎\x0eftTriangleBar;\x03⧏\x0eftUpTeeVector;\x03⥠\x0eftUpVectorBar;\x03⥘\x0dftDownVector;\x03⇃\x0dftRightArrow;\x03↔\x0dftrightarrow;\x03⇔\x0dssSlantEqual;\x03⩽\x0cftTeeVector;\x03⥚\x0cftVectorBar;\x03⥒\x0cssFullEqual;\x03≦\x0bftArrowBar;\x03⇤\x0bftTeeArrow;\x03↤\x0bftTriangle;\x03⊲\x0bftUpVector;\x03↿\x0aftCeiling;\x03⌈\x0assGreater;\x03≶\x09ftVector;\x03↼\x08ftArrow;\x03←\x08ftFloor;\x03⌊\x08ftarrow;\x03⇐\x08ssTilde;\x03≲\x07ssLess;\x03⪡\x06ftTee;\x03⊣", // obf
			// Lfr;[𝔏]. // obf
			"\x02r;\x04𝔏", // obf
			// Lleftarrow;[⇚] Ll;[⋘]. // obf
			"\x09eftarrow;\x03⇚\x01;\x03⋘", // obf
			// Lmidot;[Ŀ]. // obf
			"\x05idot;\x02Ŀ", // obf
			// LongLeftRightArrow;[⟷] Longleftrightarrow;[⟺] LowerRightArrow;[↘] LongRightArrow;[⟶] Longrightarrow;[⟹] LowerLeftArrow;[↙] LongLeftArrow;[⟵] Longleftarrow;[⟸] Lopf;[𝕃]. // obf
			"\x11ngLeftRightArrow;\x03⟷\x11ngleftrightarrow;\x03⟺\x0ewerRightArrow;\x03↘\x0dngRightArrow;\x03⟶\x0dngrightarrow;\x03⟹\x0dwerLeftArrow;\x03↙\x0cngLeftArrow;\x03⟵\x0cngleftarrow;\x03⟸\x03pf;\x04𝕃", // obf
			// Lstrok;[Ł] Lscr;[ℒ] Lsh;[↰]. // obf
			"\x05trok;\x02Ł\x03cr;\x03ℒ\x02h;\x03↰", // obf
			// Lt;[≪]. // obf
			"\x01;\x03≪", // obf
			// Map;[⤅]. // obf
			"\x02p;\x03⤅", // obf
			// Mcy;[М]. // obf
			"\x02y;\x02М", // obf
			// MediumSpace;[ ] Mellintrf;[ℳ]. // obf
			"\x0adiumSpace;\x03 \x08llintrf;\x03ℳ", // obf
			// Mfr;[𝔐]. // obf
			"\x02r;\x04𝔐", // obf
			// MinusPlus;[∓]. // obf
			"\x08nusPlus;\x03∓", // obf
			// Mopf;[𝕄]. // obf
			"\x03pf;\x04𝕄", // obf
			// Mscr;[ℳ]. // obf
			"\x03cr;\x03ℳ", // obf
			// Mu;[Μ]. // obf
			"\x01;\x02Μ", // obf
			// NJcy;[Њ]. // obf
			"\x03cy;\x02Њ", // obf
			// Nacute;[Ń]. // obf
			"\x05cute;\x02Ń", // obf
			// Ncaron;[Ň] Ncedil;[Ņ] Ncy;[Н]. // obf
			"\x05aron;\x02Ň\x05edil;\x02Ņ\x02y;\x02Н", // obf
			// NegativeVeryThinSpace;[​] NestedGreaterGreater;[≫] NegativeMediumSpace;[​] NegativeThickSpace;[​] NegativeThinSpace;[​] NestedLessLess;[≪] NewLine;[\xa]. // obf
			"\x14gativeVeryThinSpace;\x03​\x13stedGreaterGreater;\x03≫\x12gativeMediumSpace;\x03​\x11gativeThickSpace;\x03​\x10gativeThinSpace;\x03​\x0dstedLessLess;\x03≪\x06wLine;\x01\xa", // obf
			// Nfr;[𝔑]. // obf
			"\x02r;\x04𝔑", // obf
			// NotNestedGreaterGreater;[⪢̸] NotSquareSupersetEqual;[⋣] NotPrecedesSlantEqual;[⋠] NotRightTriangleEqual;[⋭] NotSucceedsSlantEqual;[⋡] NotDoubleVerticalBar;[∦] NotGreaterSlantEqual;[⩾̸] NotLeftTriangleEqual;[⋬] NotSquareSubsetEqual;[⋢] NotGreaterFullEqual;[≧̸] NotRightTriangleBar;[⧐̸] NotLeftTriangleBar;[⧏̸] NotGreaterGreater;[≫̸] NotLessSlantEqual;[⩽̸] NotNestedLessLess;[⪡̸] NotReverseElement;[∌] NotSquareSuperset;[⊐̸] NotTildeFullEqual;[≇] NonBreakingSpace;[ ] NotPrecedesEqual;[⪯̸] NotRightTriangle;[⋫] NotSucceedsEqual;[⪰̸] NotSucceedsTilde;[≿̸] NotSupersetEqual;[⊉] NotGreaterEqual;[≱] NotGreaterTilde;[≵] NotHumpDownHump;[≎̸] NotLeftTriangle;[⋪] NotSquareSubset;[⊏̸] NotGreaterLess;[≹] NotLessGreater;[≸] NotSubsetEqual;[⊈] NotVerticalBar;[∤] NotEqualTilde;[≂̸] NotTildeEqual;[≄] NotTildeTilde;[≉] NotCongruent;[≢] NotHumpEqual;[≏̸] NotLessEqual;[≰] NotLessTilde;[≴] NotLessLess;[≪̸] NotPrecedes;[⊀] NotSucceeds;[⊁] NotSuperset;[⊃⃒] NotElement;[∉] NotGreater;[≯] NotCupCap;[≭] NotExists;[∄] NotSubset;[⊂⃒] NotEqual;[≠] NotTilde;[≁] NoBreak;[⁠] NotLess;[≮] Nopf;[ℕ] Not;[⫬]. // obf
			"\x16tNestedGreaterGreater;\x05⪢̸\x15tSquareSupersetEqual;\x03⋣\x14tPrecedesSlantEqual;\x03⋠\x14tRightTriangleEqual;\x03⋭\x14tSucceedsSlantEqual;\x03⋡\x13tDoubleVerticalBar;\x03∦\x13tGreaterSlantEqual;\x05⩾̸\x13tLeftTriangleEqual;\x03⋬\x13tSquareSubsetEqual;\x03⋢\x12tGreaterFullEqual;\x05≧̸\x12tRightTriangleBar;\x05⧐̸\x11tLeftTriangleBar;\x05⧏̸\x10tGreaterGreater;\x05≫̸\x10tLessSlantEqual;\x05⩽̸\x10tNestedLessLess;\x05⪡̸\x10tReverseElement;\x03∌\x10tSquareSuperset;\x05⊐̸\x10tTildeFullEqual;\x03≇\x0fnBreakingSpace;\x02 \x0ftPrecedesEqual;\x05⪯̸\x0ftRightTriangle;\x03⋫\x0ftSucceedsEqual;\x05⪰̸\x0ftSucceedsTilde;\x05≿̸\x0ftSupersetEqual;\x03⊉\x0etGreaterEqual;\x03≱\x0etGreaterTilde;\x03≵\x0etHumpDownHump;\x05≎̸\x0etLeftTriangle;\x03⋪\x0etSquareSubset;\x05⊏̸\x0dtGreaterLess;\x03≹\x0dtLessGreater;\x03≸\x0dtSubsetEqual;\x03⊈\x0dtVerticalBar;\x03∤\x0ctEqualTilde;\x05≂̸\x0ctTildeEqual;\x03≄\x0ctTildeTilde;\x03≉\x0btCongruent;\x03≢\x0btHumpEqual;\x05≏̸\x0btLessEqual;\x03≰\x0btLessTilde;\x03≴\x0atLessLess;\x05≪̸\x0atPrecedes;\x03⊀\x0atSucceeds;\x03⊁\x0atSuperset;\x06⊃⃒\x09tElement;\x03∉\x09tGreater;\x03≯\x08tCupCap;\x03≭\x08tExists;\x03∄\x08tSubset;\x06⊂⃒\x07tEqual;\x03≠\x07tTilde;\x03≁\x06Break;\x03⁠\x06tLess;\x03≮\x03pf;\x03ℕ\x02t;\x03⫬", // obf
			// Nscr;[𝒩]. // obf
			"\x03cr;\x04𝒩", // obf
			// Ntilde;[Ñ] Ntilde[Ñ]. // obf
			"\x05ilde;\x02Ñ\x04ilde\x02Ñ", // obf
			// Nu;[Ν]. // obf
			"\x01;\x02Ν", // obf
			// OElig;[Œ]. // obf
			"\x04lig;\x02Œ", // obf
			// Oacute;[Ó] Oacute[Ó]. // obf
			"\x05cute;\x02Ó\x04cute\x02Ó", // obf
			// Ocirc;[Ô] Ocirc[Ô] Ocy;[О]. // obf
			"\x04irc;\x02Ô\x03irc\x02Ô\x02y;\x02О", // obf
			// Odblac;[Ő]. // obf
			"\x05blac;\x02Ő", // obf
			// Ofr;[𝔒]. // obf
			"\x02r;\x04𝔒", // obf
			// Ograve;[Ò] Ograve[Ò]. // obf
			"\x05rave;\x02Ò\x04rave\x02Ò", // obf
			// Omicron;[Ο] Omacr;[Ō] Omega;[Ω]. // obf
			"\x06icron;\x02Ο\x04acr;\x02Ō\x04ega;\x02Ω", // obf
			// Oopf;[𝕆]. // obf
			"\x03pf;\x04𝕆", // obf
			// OpenCurlyDoubleQuote;[“] OpenCurlyQuote;[‘]. // obf
			"\x13enCurlyDoubleQuote;\x03“\x0denCurlyQuote;\x03‘", // obf
			// Or;[⩔]. // obf
			"\x01;\x03⩔", // obf
			// Oslash;[Ø] Oslash[Ø] Oscr;[𝒪]. // obf
			"\x05lash;\x02Ø\x04lash\x02Ø\x03cr;\x04𝒪", // obf
			// Otilde;[Õ] Otimes;[⨷] Otilde[Õ]. // obf
			"\x05ilde;\x02Õ\x05imes;\x03⨷\x04ilde\x02Õ", // obf
			// Ouml;[Ö] Ouml[Ö]. // obf
			"\x03ml;\x02Ö\x02ml\x02Ö", // obf
			// OverParenthesis;[⏜] OverBracket;[⎴] OverBrace;[⏞] OverBar;[‾]. // obf
			"\x0eerParenthesis;\x03⏜\x0aerBracket;\x03⎴\x08erBrace;\x03⏞\x06erBar;\x03‾", // obf
			// PartialD;[∂]. // obf
			"\x07rtialD;\x03∂", // obf
			// Pcy;[П]. // obf
			"\x02y;\x02П", // obf
			// Pfr;[𝔓]. // obf
			"\x02r;\x04𝔓", // obf
			// Phi;[Φ]. // obf
			"\x02i;\x02Φ", // obf
			// Pi;[Π]. // obf
			"\x01;\x02Π", // obf
			// PlusMinus;[±]. // obf
			"\x08usMinus;\x02±", // obf
			// Poincareplane;[ℌ] Popf;[ℙ]. // obf
			"\x0cincareplane;\x03ℌ\x03pf;\x03ℙ", // obf
			// PrecedesSlantEqual;[≼] PrecedesEqual;[⪯] PrecedesTilde;[≾] Proportional;[∝] Proportion;[∷] Precedes;[≺] Product;[∏] Prime;[″] Pr;[⪻]. // obf
			"\x11ecedesSlantEqual;\x03≼\x0cecedesEqual;\x03⪯\x0cecedesTilde;\x03≾\x0boportional;\x03∝\x09oportion;\x03∷\x07ecedes;\x03≺\x06oduct;\x03∏\x04ime;\x03″\x01;\x03⪻", // obf
			// Pscr;[𝒫] Psi;[Ψ]. // obf
			"\x03cr;\x04𝒫\x02i;\x02Ψ", // obf
			// QUOT;[\"] QUOT[\"]. // obf
			"\x03OT;\x01\"\x02OT\x01\"", // obf
			// Qfr;[𝔔]. // obf
			"\x02r;\x04𝔔", // obf
			// Qopf;[ℚ]. // obf
			"\x03pf;\x03ℚ", // obf
			// Qscr;[𝒬]. // obf
			"\x03cr;\x04𝒬", // obf
			// RBarr;[⤐]. // obf
			"\x04arr;\x03⤐", // obf
			// REG;[®] REG[®]. // obf
			"\x02G;\x02®\x01G\x02®", // obf
			// Racute;[Ŕ] Rarrtl;[⤖] Rang;[⟫] Rarr;[↠]. // obf
			"\x05cute;\x02Ŕ\x05rrtl;\x03⤖\x03ng;\x03⟫\x03rr;\x03↠", // obf
			// Rcaron;[Ř] Rcedil;[Ŗ] Rcy;[Р]. // obf
			"\x05aron;\x02Ř\x05edil;\x02Ŗ\x02y;\x02Р", // obf
			// ReverseUpEquilibrium;[⥯] ReverseEquilibrium;[⇋] ReverseElement;[∋] Re;[ℜ]. // obf
			"\x13verseUpEquilibrium;\x03⥯\x11verseEquilibrium;\x03⇋\x0dverseElement;\x03∋\x01;\x03ℜ", // obf
			// Rfr;[ℜ]. // obf
			"\x02r;\x03ℜ", // obf
			// Rho;[Ρ]. // obf
			"\x02o;\x02Ρ", // obf
			// RightArrowLeftArrow;[⇄] RightDoubleBracket;[⟧] RightDownTeeVector;[⥝] RightDownVectorBar;[⥕] RightTriangleEqual;[⊵] RightAngleBracket;[⟩] RightUpDownVector;[⥏] RightTriangleBar;[⧐] RightUpTeeVector;[⥜] RightUpVectorBar;[⥔] RightDownVector;[⇂] RightTeeVector;[⥛] RightVectorBar;[⥓] RightArrowBar;[⇥] RightTeeArrow;[↦] RightTriangle;[⊳] RightUpVector;[↾] RightCeiling;[⌉] RightVector;[⇀] RightArrow;[→] RightFloor;[⌋] Rightarrow;[⇒] RightTee;[⊢]. // obf
			"\x12ghtArrowLeftArrow;\x03⇄\x11ghtDoubleBracket;\x03⟧\x11ghtDownTeeVector;\x03⥝\x11ghtDownVectorBar;\x03⥕\x11ghtTriangleEqual;\x03⊵\x10ghtAngleBracket;\x03⟩\x10ghtUpDownVector;\x03⥏\x0fghtTriangleBar;\x03⧐\x0fghtUpTeeVector;\x03⥜\x0fghtUpVectorBar;\x03⥔\x0eghtDownVector;\x03⇂\x0dghtTeeVector;\x03⥛\x0dghtVectorBar;\x03⥓\x0cghtArrowBar;\x03⇥\x0cghtTeeArrow;\x03↦\x0cghtTriangle;\x03⊳\x0cghtUpVector;\x03↾\x0bghtCeiling;\x03⌉\x0aghtVector;\x03⇀\x09ghtArrow;\x03→\x09ghtFloor;\x03⌋\x09ghtarrow;\x03⇒\x07ghtTee;\x03⊢", // obf
			// RoundImplies;[⥰] Ropf;[ℝ]. // obf
			"\x0bundImplies;\x03⥰\x03pf;\x03ℝ", // obf
			// Rrightarrow;[⇛]. // obf
			"\x0aightarrow;\x03⇛", // obf
			// Rscr;[ℛ] Rsh;[↱]. // obf
			"\x03cr;\x03ℛ\x02h;\x03↱", // obf
			// RuleDelayed;[⧴]. // obf
			"\x0aleDelayed;\x03⧴", // obf
			// SHCHcy;[Щ] SHcy;[Ш]. // obf
			"\x05CHcy;\x02Щ\x03cy;\x02Ш", // obf
			// SOFTcy;[Ь]. // obf
			"\x05FTcy;\x02Ь", // obf
			// Sacute;[Ś]. // obf
			"\x05cute;\x02Ś", // obf
			// Scaron;[Š] Scedil;[Ş] Scirc;[Ŝ] Scy;[С] Sc;[⪼]. // obf
			"\x05aron;\x02Š\x05edil;\x02Ş\x04irc;\x02Ŝ\x02y;\x02С\x01;\x03⪼", // obf
			// Sfr;[𝔖]. // obf
			"\x02r;\x04𝔖", // obf
			// ShortRightArrow;[→] ShortDownArrow;[↓] ShortLeftArrow;[←] ShortUpArrow;[↑]. // obf
			"\x0eortRightArrow;\x03→\x0dortDownArrow;\x03↓\x0dortLeftArrow;\x03←\x0bortUpArrow;\x03↑", // obf
			// Sigma;[Σ]. // obf
			"\x04gma;\x02Σ", // obf
			// SmallCircle;[∘]. // obf
			"\x0aallCircle;\x03∘", // obf
			// Sopf;[𝕊]. // obf
			"\x03pf;\x04𝕊", // obf
			// SquareSupersetEqual;[⊒] SquareIntersection;[⊓] SquareSubsetEqual;[⊑] SquareSuperset;[⊐] SquareSubset;[⊏] SquareUnion;[⊔] Square;[□] Sqrt;[√]. // obf
			"\x12uareSupersetEqual;\x03⊒\x11uareIntersection;\x03⊓\x10uareSubsetEqual;\x03⊑\x0duareSuperset;\x03⊐\x0buareSubset;\x03⊏\x0auareUnion;\x03⊔\x05uare;\x03□\x03rt;\x03√", // obf
			// Sscr;[𝒮]. // obf
			"\x03cr;\x04𝒮", // obf
			// Star;[⋆]. // obf
			"\x03ar;\x03⋆", // obf
			// SucceedsSlantEqual;[≽] SucceedsEqual;[⪰] SucceedsTilde;[≿] SupersetEqual;[⊇] SubsetEqual;[⊆] Succeeds;[≻] SuchThat;[∋] Superset;[⊃] Subset;[⋐] Supset;[⋑] Sub;[⋐] Sum;[∑] Sup;[⋑]. // obf
			"\x11cceedsSlantEqual;\x03≽\x0ccceedsEqual;\x03⪰\x0ccceedsTilde;\x03≿\x0cpersetEqual;\x03⊇\x0absetEqual;\x03⊆\x07cceeds;\x03≻\x07chThat;\x03∋\x07perset;\x03⊃\x05bset;\x03⋐\x05pset;\x03⋑\x02b;\x03⋐\x02m;\x03∑\x02p;\x03⋑", // obf
			// THORN;[Þ] THORN[Þ]. // obf
			"\x04ORN;\x02Þ\x03ORN\x02Þ", // obf
			// TRADE;[™]. // obf
			"\x04ADE;\x03™", // obf
			// TSHcy;[Ћ] TScy;[Ц]. // obf
			"\x04Hcy;\x02Ћ\x03cy;\x02Ц", // obf
			// Tab;[\x9] Tau;[Τ]. // obf
			"\x02b;\x01\x9\x02u;\x02Τ", // obf
			// Tcaron;[Ť] Tcedil;[Ţ] Tcy;[Т]. // obf
			"\x05aron;\x02Ť\x05edil;\x02Ţ\x02y;\x02Т", // obf
			// Tfr;[𝔗]. // obf
			"\x02r;\x04𝔗", // obf
			// ThickSpace;[  ] Therefore;[∴] ThinSpace;[ ] Theta;[Θ]. // obf
			"\x09ickSpace;\x06  \x08erefore;\x03∴\x08inSpace;\x03 \x04eta;\x02Θ", // obf
			// TildeFullEqual;[≅] TildeEqual;[≃] TildeTilde;[≈] Tilde;[∼]. // obf
			"\x0dldeFullEqual;\x03≅\x09ldeEqual;\x03≃\x09ldeTilde;\x03≈\x04lde;\x03∼", // obf
			// Topf;[𝕋]. // obf
			"\x03pf;\x04𝕋", // obf
			// TripleDot;[⃛]. // obf
			"\x08ipleDot;\x03⃛", // obf
			// Tstrok;[Ŧ] Tscr;[𝒯]. // obf
			"\x05trok;\x02Ŧ\x03cr;\x04𝒯", // obf
			// Uarrocir;[⥉] Uacute;[Ú] Uacute[Ú] Uarr;[↟]. // obf
			"\x07rrocir;\x03⥉\x05cute;\x02Ú\x04cute\x02Ú\x03rr;\x03↟", // obf
			// Ubreve;[Ŭ] Ubrcy;[Ў]. // obf
			"\x05reve;\x02Ŭ\x04rcy;\x02Ў", // obf
			// Ucirc;[Û] Ucirc[Û] Ucy;[У]. // obf
			"\x04irc;\x02Û\x03irc\x02Û\x02y;\x02У", // obf
			// Udblac;[Ű]. // obf
			"\x05blac;\x02Ű", // obf
			// Ufr;[𝔘]. // obf
			"\x02r;\x04𝔘", // obf
			// Ugrave;[Ù] Ugrave[Ù]. // obf
			"\x05rave;\x02Ù\x04rave\x02Ù", // obf
			// Umacr;[Ū]. // obf
			"\x04acr;\x02Ū", // obf
			// UnderParenthesis;[⏝] UnderBracket;[⎵] UnderBrace;[⏟] UnionPlus;[⊎] UnderBar;[_] Union;[⋃]. // obf
			"\x0fderParenthesis;\x03⏝\x0bderBracket;\x03⎵\x09derBrace;\x03⏟\x08ionPlus;\x03⊎\x07derBar;\x01_\x04ion;\x03⋃", // obf
			// Uogon;[Ų] Uopf;[𝕌]. // obf
			"\x04gon;\x02Ų\x03pf;\x04𝕌", // obf
			// UpArrowDownArrow;[⇅] UpperRightArrow;[↗] UpperLeftArrow;[↖] UpEquilibrium;[⥮] UpDownArrow;[↕] Updownarrow;[⇕] UpArrowBar;[⤒] UpTeeArrow;[↥] UpArrow;[↑] Uparrow;[⇑] Upsilon;[Υ] UpTee;[⊥] Upsi;[ϒ]. // obf
			"\x0fArrowDownArrow;\x03⇅\x0eperRightArrow;\x03↗\x0dperLeftArrow;\x03↖\x0cEquilibrium;\x03⥮\x0aDownArrow;\x03↕\x0adownarrow;\x03⇕\x09ArrowBar;\x03⤒\x09TeeArrow;\x03↥\x06Arrow;\x03↑\x06arrow;\x03⇑\x06silon;\x02Υ\x04Tee;\x03⊥\x03si;\x02ϒ", // obf
			// Uring;[Ů]. // obf
			"\x04ing;\x02Ů", // obf
			// Uscr;[𝒰]. // obf
			"\x03cr;\x04𝒰", // obf
			// Utilde;[Ũ]. // obf
			"\x05ilde;\x02Ũ", // obf
			// Uuml;[Ü] Uuml[Ü]. // obf
			"\x03ml;\x02Ü\x02ml\x02Ü", // obf
			// VDash;[⊫]. // obf
			"\x04ash;\x03⊫", // obf
			// Vbar;[⫫]. // obf
			"\x03ar;\x03⫫", // obf
			// Vcy;[В]. // obf
			"\x02y;\x02В", // obf
			// Vdashl;[⫦] Vdash;[⊩]. // obf
			"\x05ashl;\x03⫦\x04ash;\x03⊩", // obf
			// VerticalSeparator;[❘] VerticalTilde;[≀] VeryThinSpace;[ ] VerticalLine;[|] VerticalBar;[∣] Verbar;[‖] Vert;[‖] Vee;[⋁]. // obf
			"\x10rticalSeparator;\x03❘\x0crticalTilde;\x03≀\x0cryThinSpace;\x03 \x0brticalLine;\x01|\x0articalBar;\x03∣\x05rbar;\x03‖\x03rt;\x03‖\x02e;\x03⋁", // obf
			// Vfr;[𝔙]. // obf
			"\x02r;\x04𝔙", // obf
			// Vopf;[𝕍]. // obf
			"\x03pf;\x04𝕍", // obf
			// Vscr;[𝒱]. // obf
			"\x03cr;\x04𝒱", // obf
			// Vvdash;[⊪]. // obf
			"\x05dash;\x03⊪", // obf
			// Wcirc;[Ŵ]. // obf
			"\x04irc;\x02Ŵ", // obf
			// Wedge;[⋀]. // obf
			"\x04dge;\x03⋀", // obf
			// Wfr;[𝔚]. // obf
			"\x02r;\x04𝔚", // obf
			// Wopf;[𝕎]. // obf
			"\x03pf;\x04𝕎", // obf
			// Wscr;[𝒲]. // obf
			"\x03cr;\x04𝒲", // obf
			// Xfr;[𝔛]. // obf
			"\x02r;\x04𝔛", // obf
			// Xi;[Ξ]. // obf
			"\x01;\x02Ξ", // obf
			// Xopf;[𝕏]. // obf
			"\x03pf;\x04𝕏", // obf
			// Xscr;[𝒳]. // obf
			"\x03cr;\x04𝒳", // obf
			// YAcy;[Я]. // obf
			"\x03cy;\x02Я", // obf
			// YIcy;[Ї]. // obf
			"\x03cy;\x02Ї", // obf
			// YUcy;[Ю]. // obf
			"\x03cy;\x02Ю", // obf
			// Yacute;[Ý] Yacute[Ý]. // obf
			"\x05cute;\x02Ý\x04cute\x02Ý", // obf
			// Ycirc;[Ŷ] Ycy;[Ы]. // obf
			"\x04irc;\x02Ŷ\x02y;\x02Ы", // obf
			// Yfr;[𝔜]. // obf
			"\x02r;\x04𝔜", // obf
			// Yopf;[𝕐]. // obf
			"\x03pf;\x04𝕐", // obf
			// Yscr;[𝒴]. // obf
			"\x03cr;\x04𝒴", // obf
			// Yuml;[Ÿ]. // obf
			"\x03ml;\x02Ÿ", // obf
			// ZHcy;[Ж]. // obf
			"\x03cy;\x02Ж", // obf
			// Zacute;[Ź]. // obf
			"\x05cute;\x02Ź", // obf
			// Zcaron;[Ž] Zcy;[З]. // obf
			"\x05aron;\x02Ž\x02y;\x02З", // obf
			// Zdot;[Ż]. // obf
			"\x03ot;\x02Ż", // obf
			// ZeroWidthSpace;[​] Zeta;[Ζ]. // obf
			"\x0droWidthSpace;\x03​\x03ta;\x02Ζ", // obf
			// Zfr;[ℨ]. // obf
			"\x02r;\x03ℨ", // obf
			// Zopf;[ℤ]. // obf
			"\x03pf;\x03ℤ", // obf
			// Zscr;[𝒵]. // obf
			"\x03cr;\x04𝒵", // obf
			// aacute;[á] aacute[á]. // obf
			"\x05cute;\x02á\x04cute\x02á", // obf
			// abreve;[ă]. // obf
			"\x05reve;\x02ă", // obf
			// acirc;[â] acute;[´] acirc[â] acute[´] acE;[∾̳] acd;[∿] acy;[а] ac;[∾]. // obf
			"\x04irc;\x02â\x04ute;\x02´\x03irc\x02â\x03ute\x02´\x02E;\x05∾̳\x02d;\x03∿\x02y;\x02а\x01;\x03∾", // obf
			// aelig;[æ] aelig[æ]. // obf
			"\x04lig;\x02æ\x03lig\x02æ", // obf
			// afr;[𝔞] af;[⁡]. // obf
			"\x02r;\x04𝔞\x01;\x03⁡", // obf
			// agrave;[à] agrave[à]. // obf
			"\x05rave;\x02à\x04rave\x02à", // obf
			// alefsym;[ℵ] aleph;[ℵ] alpha;[α]. // obf
			"\x06efsym;\x03ℵ\x04eph;\x03ℵ\x04pha;\x02α", // obf
			// amacr;[ā] amalg;[⨿] amp;[&] amp[&]. // obf
			"\x04acr;\x02ā\x04alg;\x03⨿\x02p;\x01&\x01p\x01&", // obf
			// andslope;[⩘] angmsdaa;[⦨] angmsdab;[⦩] angmsdac;[⦪] angmsdad;[⦫] angmsdae;[⦬] angmsdaf;[⦭] angmsdag;[⦮] angmsdah;[⦯] angrtvbd;[⦝] angrtvb;[⊾] angzarr;[⍼] andand;[⩕] angmsd;[∡] angsph;[∢] angle;[∠] angrt;[∟] angst;[Å] andd;[⩜] andv;[⩚] ange;[⦤] and;[∧] ang;[∠]. // obf
			"\x07dslope;\x03⩘\x07gmsdaa;\x03⦨\x07gmsdab;\x03⦩\x07gmsdac;\x03⦪\x07gmsdad;\x03⦫\x07gmsdae;\x03⦬\x07gmsdaf;\x03⦭\x07gmsdag;\x03⦮\x07gmsdah;\x03⦯\x07grtvbd;\x03⦝\x06grtvb;\x03⊾\x06gzarr;\x03⍼\x05dand;\x03⩕\x05gmsd;\x03∡\x05gsph;\x03∢\x04gle;\x03∠\x04grt;\x03∟\x04gst;\x02Å\x03dd;\x03⩜\x03dv;\x03⩚\x03ge;\x03⦤\x02d;\x03∧\x02g;\x03∠", // obf
			// aogon;[ą] aopf;[𝕒]. // obf
			"\x04gon;\x02ą\x03pf;\x04𝕒", // obf
			// approxeq;[≊] apacir;[⩯] approx;[≈] apid;[≋] apos;['] apE;[⩰] ape;[≊] ap;[≈]. // obf
			"\x07proxeq;\x03≊\x05acir;\x03⩯\x05prox;\x03≈\x03id;\x03≋\x03os;\x01'\x02E;\x03⩰\x02e;\x03≊\x01;\x03≈", // obf
			// aring;[å] aring[å]. // obf
			"\x04ing;\x02å\x03ing\x02å", // obf
			// asympeq;[≍] asymp;[≈] ascr;[𝒶] ast;[*]. // obf
			"\x06ympeq;\x03≍\x04ymp;\x03≈\x03cr;\x04𝒶\x02t;\x01*", // obf
			// atilde;[ã] atilde[ã]. // obf
			"\x05ilde;\x02ã\x04ilde\x02ã", // obf
			// auml;[ä] auml[ä]. // obf
			"\x03ml;\x02ä\x02ml\x02ä", // obf
			// awconint;[∳] awint;[⨑]. // obf
			"\x07conint;\x03∳\x04int;\x03⨑", // obf
			// bNot;[⫭]. // obf
			"\x03ot;\x03⫭", // obf
			// backepsilon;[϶] backprime;[‵] backsimeq;[⋍] backcong;[≌] barwedge;[⌅] backsim;[∽] barvee;[⊽] barwed;[⌅]. // obf
			"\x0ackepsilon;\x02϶\x08ckprime;\x03‵\x08cksimeq;\x03⋍\x07ckcong;\x03≌\x07rwedge;\x03⌅\x06cksim;\x03∽\x05rvee;\x03⊽\x05rwed;\x03⌅", // obf
			// bbrktbrk;[⎶] bbrk;[⎵]. // obf
			"\x07rktbrk;\x03⎶\x03rk;\x03⎵", // obf
			// bcong;[≌] bcy;[б]. // obf
			"\x04ong;\x03≌\x02y;\x02б", // obf
			// bdquo;[„]. // obf
			"\x04quo;\x03„", // obf
			// because;[∵] bemptyv;[⦰] between;[≬] becaus;[∵] bernou;[ℬ] bepsi;[϶] beta;[β] beth;[ℶ]. // obf
			"\x06cause;\x03∵\x06mptyv;\x03⦰\x06tween;\x03≬\x05caus;\x03∵\x05rnou;\x03ℬ\x04psi;\x02϶\x03ta;\x02β\x03th;\x03ℶ", // obf
			// bfr;[𝔟]. // obf
			"\x02r;\x04𝔟", // obf
			// bigtriangledown;[▽] bigtriangleup;[△] bigotimes;[⨂] bigoplus;[⨁] bigsqcup;[⨆] biguplus;[⨄] bigwedge;[⋀] bigcirc;[◯] bigodot;[⨀] bigstar;[★] bigcap;[⋂] bigcup;[⋃] bigvee;[⋁]. // obf
			"\x0egtriangledown;\x03▽\x0cgtriangleup;\x03△\x08gotimes;\x03⨂\x07goplus;\x03⨁\x07gsqcup;\x03⨆\x07guplus;\x03⨄\x07gwedge;\x03⋀\x06gcirc;\x03◯\x06godot;\x03⨀\x06gstar;\x03★\x05gcap;\x03⋂\x05gcup;\x03⋃\x05gvee;\x03⋁", // obf
			// bkarow;[⤍]. // obf
			"\x05arow;\x03⤍", // obf
			// blacktriangleright;[▸] blacktriangledown;[▾] blacktriangleleft;[◂] blacktriangle;[▴] blacklozenge;[⧫] blacksquare;[▪] blank;[␣] blk12;[▒] blk14;[░] blk34;[▓] block;[█]. // obf
			"\x11acktriangleright;\x03▸\x10acktriangledown;\x03▾\x10acktriangleleft;\x03◂\x0cacktriangle;\x03▴\x0backlozenge;\x03⧫\x0aacksquare;\x03▪\x04ank;\x03␣\x04k12;\x03▒\x04k14;\x03░\x04k34;\x03▓\x04ock;\x03█", // obf
			// bnequiv;[≡⃥] bnot;[⌐] bne;[=⃥]. // obf
			"\x06equiv;\x06≡⃥\x03ot;\x03⌐\x02e;\x04=⃥", // obf
			// boxminus;[⊟] boxtimes;[⊠] boxplus;[⊞] bottom;[⊥] bowtie;[⋈] boxbox;[⧉] boxDL;[╗] boxDR;[╔] boxDl;[╖] boxDr;[╓] boxHD;[╦] boxHU;[╩] boxHd;[╤] boxHu;[╧] boxUL;[╝] boxUR;[╚] boxUl;[╜] boxUr;[╙] boxVH;[╬] boxVL;[╣] boxVR;[╠] boxVh;[╫] boxVl;[╢] boxVr;[╟] boxdL;[╕] boxdR;[╒] boxdl;[┐] boxdr;[┌] boxhD;[╥] boxhU;[╨] boxhd;[┬] boxhu;[┴] boxuL;[╛] boxuR;[╘] boxul;[┘] boxur;[└] boxvH;[╪] boxvL;[╡] boxvR;[╞] boxvh;[┼] boxvl;[┤] boxvr;[├] bopf;[𝕓] boxH;[═] boxV;[║] boxh;[─] boxv;[│] bot;[⊥]. // obf
			"\x07xminus;\x03⊟\x07xtimes;\x03⊠\x06xplus;\x03⊞\x05ttom;\x03⊥\x05wtie;\x03⋈\x05xbox;\x03⧉\x04xDL;\x03╗\x04xDR;\x03╔\x04xDl;\x03╖\x04xDr;\x03╓\x04xHD;\x03╦\x04xHU;\x03╩\x04xHd;\x03╤\x04xHu;\x03╧\x04xUL;\x03╝\x04xUR;\x03╚\x04xUl;\x03╜\x04xUr;\x03╙\x04xVH;\x03╬\x04xVL;\x03╣\x04xVR;\x03╠\x04xVh;\x03╫\x04xVl;\x03╢\x04xVr;\x03╟\x04xdL;\x03╕\x04xdR;\x03╒\x04xdl;\x03┐\x04xdr;\x03┌\x04xhD;\x03╥\x04xhU;\x03╨\x04xhd;\x03┬\x04xhu;\x03┴\x04xuL;\x03╛\x04xuR;\x03╘\x04xul;\x03┘\x04xur;\x03└\x04xvH;\x03╪\x04xvL;\x03╡\x04xvR;\x03╞\x04xvh;\x03┼\x04xvl;\x03┤\x04xvr;\x03├\x03pf;\x04𝕓\x03xH;\x03═\x03xV;\x03║\x03xh;\x03─\x03xv;\x03│\x02t;\x03⊥", // obf
			// bprime;[‵]. // obf
			"\x05rime;\x03‵", // obf
			// brvbar;[¦] breve;[˘] brvbar[¦]. // obf
			"\x05vbar;\x02¦\x04eve;\x02˘\x04vbar\x02¦", // obf
			// bsolhsub;[⟈] bsemi;[⁏] bsime;[⋍] bsolb;[⧅] bscr;[𝒷] bsim;[∽] bsol;[\\]. // obf
			"\x07olhsub;\x03⟈\x04emi;\x03⁏\x04ime;\x03⋍\x04olb;\x03⧅\x03cr;\x04𝒷\x03im;\x03∽\x03ol;\x01\\", // obf
			// bullet;[•] bumpeq;[≏] bumpE;[⪮] bumpe;[≏] bull;[•] bump;[≎]. // obf
			"\x05llet;\x03•\x05mpeq;\x03≏\x04mpE;\x03⪮\x04mpe;\x03≏\x03ll;\x03•\x03mp;\x03≎", // obf
			// capbrcup;[⩉] cacute;[ć] capand;[⩄] capcap;[⩋] capcup;[⩇] capdot;[⩀] caret;[⁁] caron;[ˇ] caps;[∩︀] cap;[∩]. // obf
			"\x07pbrcup;\x03⩉\x05cute;\x02ć\x05pand;\x03⩄\x05pcap;\x03⩋\x05pcup;\x03⩇\x05pdot;\x03⩀\x04ret;\x03⁁\x04ron;\x02ˇ\x03ps;\x06∩︀\x02p;\x03∩", // obf
			// ccupssm;[⩐] ccaron;[č] ccedil;[ç] ccaps;[⩍] ccedil[ç] ccirc;[ĉ] ccups;[⩌]. // obf
			"\x06upssm;\x03⩐\x05aron;\x02č\x05edil;\x02ç\x04aps;\x03⩍\x04edil\x02ç\x04irc;\x02ĉ\x04ups;\x03⩌", // obf
			// cdot;[ċ]. // obf
			"\x03ot;\x02ċ", // obf
			// centerdot;[·] cemptyv;[⦲] cedil;[¸] cedil[¸] cent;[¢] cent[¢]. // obf
			"\x08nterdot;\x02·\x06mptyv;\x03⦲\x04dil;\x02¸\x03dil\x02¸\x03nt;\x02¢\x02nt\x02¢", // obf
			// cfr;[𝔠]. // obf
			"\x02r;\x04𝔠", // obf
			// checkmark;[✓] check;[✓] chcy;[ч] chi;[χ]. // obf
			"\x08eckmark;\x03✓\x04eck;\x03✓\x03cy;\x02ч\x02i;\x02χ", // obf
			// circlearrowright;[↻] circlearrowleft;[↺] circledcirc;[⊚] circleddash;[⊝] circledast;[⊛] circledR;[®] circledS;[Ⓢ] cirfnint;[⨐] cirscir;[⧂] circeq;[≗] cirmid;[⫯] cirE;[⧃] circ;[ˆ] cire;[≗] cir;[○]. // obf
			"\x0frclearrowright;\x03↻\x0erclearrowleft;\x03↺\x0arcledcirc;\x03⊚\x0arcleddash;\x03⊝\x09rcledast;\x03⊛\x07rcledR;\x02®\x07rcledS;\x03Ⓢ\x07rfnint;\x03⨐\x06rscir;\x03⧂\x05rceq;\x03≗\x05rmid;\x03⫯\x03rE;\x03⧃\x03rc;\x02ˆ\x03re;\x03≗\x02r;\x03○", // obf
			// clubsuit;[♣] clubs;[♣]. // obf
			"\x07ubsuit;\x03♣\x04ubs;\x03♣", // obf
			// complement;[∁] complexes;[ℂ] coloneq;[≔] congdot;[⩭] colone;[≔] commat;[@] compfn;[∘] conint;[∮] coprod;[∐] copysr;[℗] colon;[:] comma;[,] comp;[∁] cong;[≅] copf;[𝕔] copy;[©] copy[©]. // obf
			"\x09mplement;\x03∁\x08mplexes;\x03ℂ\x06loneq;\x03≔\x06ngdot;\x03⩭\x05lone;\x03≔\x05mmat;\x01@\x05mpfn;\x03∘\x05nint;\x03∮\x05prod;\x03∐\x05pysr;\x03℗\x04lon;\x01:\x04mma;\x01,\x03mp;\x03∁\x03ng;\x03≅\x03pf;\x04𝕔\x03py;\x02©\x02py\x02©", // obf
			// crarr;[↵] cross;[✗]. // obf
			"\x04arr;\x03↵\x04oss;\x03✗", // obf
			// csube;[⫑] csupe;[⫒] cscr;[𝒸] csub;[⫏] csup;[⫐]. // obf
			"\x04ube;\x03⫑\x04upe;\x03⫒\x03cr;\x04𝒸\x03ub;\x03⫏\x03up;\x03⫐", // obf
			// ctdot;[⋯]. // obf
			"\x04dot;\x03⋯", // obf
			// curvearrowright;[↷] curvearrowleft;[↶] curlyeqprec;[⋞] curlyeqsucc;[⋟] curlywedge;[⋏] cupbrcap;[⩈] curlyvee;[⋎] cudarrl;[⤸] cudarrr;[⤵] cularrp;[⤽] curarrm;[⤼] cularr;[↶] cupcap;[⩆] cupcup;[⩊] cupdot;[⊍] curarr;[↷] curren;[¤] cuepr;[⋞] cuesc;[⋟] cupor;[⩅] curren[¤] cuvee;[⋎] cuwed;[⋏] cups;[∪︀] cup;[∪]. // obf
			"\x0ervearrowright;\x03↷\x0drvearrowleft;\x03↶\x0arlyeqprec;\x03⋞\x0arlyeqsucc;\x03⋟\x09rlywedge;\x03⋏\x07pbrcap;\x03⩈\x07rlyvee;\x03⋎\x06darrl;\x03⤸\x06darrr;\x03⤵\x06larrp;\x03⤽\x06rarrm;\x03⤼\x05larr;\x03↶\x05pcap;\x03⩆\x05pcup;\x03⩊\x05pdot;\x03⊍\x05rarr;\x03↷\x05rren;\x02¤\x04epr;\x03⋞\x04esc;\x03⋟\x04por;\x03⩅\x04rren\x02¤\x04vee;\x03⋎\x04wed;\x03⋏\x03ps;\x06∪︀\x02p;\x03∪", // obf
			// cwconint;[∲] cwint;[∱]. // obf
			"\x07conint;\x03∲\x04int;\x03∱", // obf
			// cylcty;[⌭]. // obf
			"\x05lcty;\x03⌭", // obf
			// dArr;[⇓]. // obf
			"\x03rr;\x03⇓", // obf
			// dHar;[⥥]. // obf
			"\x03ar;\x03⥥", // obf
			// dagger;[†] daleth;[ℸ] dashv;[⊣] darr;[↓] dash;[‐]. // obf
			"\x05gger;\x03†\x05leth;\x03ℸ\x04shv;\x03⊣\x03rr;\x03↓\x03sh;\x03‐", // obf
			// dbkarow;[⤏] dblac;[˝]. // obf
			"\x06karow;\x03⤏\x04lac;\x02˝", // obf
			// dcaron;[ď] dcy;[д]. // obf
			"\x05aron;\x02ď\x02y;\x02д", // obf
			// ddagger;[‡] ddotseq;[⩷] ddarr;[⇊] dd;[ⅆ]. // obf
			"\x06agger;\x03‡\x06otseq;\x03⩷\x04arr;\x03⇊\x01;\x03ⅆ", // obf
			// demptyv;[⦱] delta;[δ] deg;[°] deg[°]. // obf
			"\x06mptyv;\x03⦱\x04lta;\x02δ\x02g;\x02°\x01g\x02°", // obf
			// dfisht;[⥿] dfr;[𝔡]. // obf
			"\x05isht;\x03⥿\x02r;\x04𝔡", // obf
			// dharl;[⇃] dharr;[⇂]. // obf
			"\x04arl;\x03⇃\x04arr;\x03⇂", // obf
			// divideontimes;[⋇] diamondsuit;[♦] diamond;[⋄] digamma;[ϝ] divide;[÷] divonx;[⋇] diams;[♦] disin;[⋲] divide[÷] diam;[⋄] die;[¨] div;[÷]. // obf
			"\x0cvideontimes;\x03⋇\x0aamondsuit;\x03♦\x06amond;\x03⋄\x06gamma;\x02ϝ\x05vide;\x02÷\x05vonx;\x03⋇\x04ams;\x03♦\x04sin;\x03⋲\x04vide\x02÷\x03am;\x03⋄\x02e;\x02¨\x02v;\x02÷", // obf
			// djcy;[ђ]. // obf
			"\x03cy;\x02ђ", // obf
			// dlcorn;[⌞] dlcrop;[⌍]. // obf
			"\x05corn;\x03⌞\x05crop;\x03⌍", // obf
			// downharpoonright;[⇂] downharpoonleft;[⇃] doublebarwedge;[⌆] downdownarrows;[⇊] dotsquare;[⊡] downarrow;[↓] doteqdot;[≑] dotminus;[∸] dotplus;[∔] dollar;[$] doteq;[≐] dopf;[𝕕] dot;[˙]. // obf
			"\x0fwnharpoonright;\x03⇂\x0ewnharpoonleft;\x03⇃\x0dublebarwedge;\x03⌆\x0dwndownarrows;\x03⇊\x08tsquare;\x03⊡\x08wnarrow;\x03↓\x07teqdot;\x03≑\x07tminus;\x03∸\x06tplus;\x03∔\x05llar;\x01$\x04teq;\x03≐\x03pf;\x04𝕕\x02t;\x02˙", // obf
			// drbkarow;[⤐] drcorn;[⌟] drcrop;[⌌]. // obf
			"\x07bkarow;\x03⤐\x05corn;\x03⌟\x05crop;\x03⌌", // obf
			// dstrok;[đ] dscr;[𝒹] dscy;[ѕ] dsol;[⧶]. // obf
			"\x05trok;\x02đ\x03cr;\x04𝒹\x03cy;\x02ѕ\x03ol;\x03⧶", // obf
			// dtdot;[⋱] dtrif;[▾] dtri;[▿]. // obf
			"\x04dot;\x03⋱\x04rif;\x03▾\x03ri;\x03▿", // obf
			// duarr;[⇵] duhar;[⥯]. // obf
			"\x04arr;\x03⇵\x04har;\x03⥯", // obf
			// dwangle;[⦦]. // obf
			"\x06angle;\x03⦦", // obf
			// dzigrarr;[⟿] dzcy;[џ]. // obf
			"\x07igrarr;\x03⟿\x03cy;\x02џ", // obf
			// eDDot;[⩷] eDot;[≑]. // obf
			"\x04Dot;\x03⩷\x03ot;\x03≑", // obf
			// eacute;[é] easter;[⩮] eacute[é]. // obf
			"\x05cute;\x02é\x05ster;\x03⩮\x04cute\x02é", // obf
			// ecaron;[ě] ecolon;[≕] ecirc;[ê] ecir;[≖] ecirc[ê] ecy;[э]. // obf
			"\x05aron;\x02ě\x05olon;\x03≕\x04irc;\x02ê\x03ir;\x03≖\x03irc\x02ê\x02y;\x02э", // obf
			// edot;[ė]. // obf
			"\x03ot;\x02ė", // obf
			// ee;[ⅇ]. // obf
			"\x01;\x03ⅇ", // obf
			// efDot;[≒] efr;[𝔢]. // obf
			"\x04Dot;\x03≒\x02r;\x04𝔢", // obf
			// egrave;[è] egsdot;[⪘] egrave[è] egs;[⪖] eg;[⪚]. // obf
			"\x05rave;\x02è\x05sdot;\x03⪘\x04rave\x02è\x02s;\x03⪖\x01;\x03⪚", // obf
			// elinters;[⏧] elsdot;[⪗] ell;[ℓ] els;[⪕] el;[⪙]. // obf
			"\x07inters;\x03⏧\x05sdot;\x03⪗\x02l;\x03ℓ\x02s;\x03⪕\x01;\x03⪙", // obf
			// emptyset;[∅] emptyv;[∅] emsp13;[ ] emsp14;[ ] emacr;[ē] empty;[∅] emsp;[ ]. // obf
			"\x07ptyset;\x03∅\x05ptyv;\x03∅\x05sp13;\x03 \x05sp14;\x03 \x04acr;\x02ē\x04pty;\x03∅\x03sp;\x03 ", // obf
			// ensp;[ ] eng;[ŋ]. // obf
			"\x03sp;\x03 \x02g;\x02ŋ", // obf
			// eogon;[ę] eopf;[𝕖]. // obf
			"\x04gon;\x02ę\x03pf;\x04𝕖", // obf
			// epsilon;[ε] eparsl;[⧣] eplus;[⩱] epsiv;[ϵ] epar;[⋕] epsi;[ε]. // obf
			"\x06silon;\x02ε\x05arsl;\x03⧣\x04lus;\x03⩱\x04siv;\x02ϵ\x03ar;\x03⋕\x03si;\x02ε", // obf
			// eqslantless;[⪕] eqslantgtr;[⪖] eqvparsl;[⧥] eqcolon;[≕] equivDD;[⩸] eqcirc;[≖] equals;[=] equest;[≟] eqsim;[≂] equiv;[≡]. // obf
			"\x0aslantless;\x03⪕\x09slantgtr;\x03⪖\x07vparsl;\x03⧥\x06colon;\x03≕\x06uivDD;\x03⩸\x05circ;\x03≖\x05uals;\x01=\x05uest;\x03≟\x04sim;\x03≂\x04uiv;\x03≡", // obf
			// erDot;[≓] erarr;[⥱]. // obf
			"\x04Dot;\x03≓\x04arr;\x03⥱", // obf
			// esdot;[≐] escr;[ℯ] esim;[≂]. // obf
			"\x04dot;\x03≐\x03cr;\x03ℯ\x03im;\x03≂", // obf
			// eta;[η] eth;[ð] eth[ð]. // obf
			"\x02a;\x02η\x02h;\x02ð\x01h\x02ð", // obf
			// euml;[ë] euro;[€] euml[ë]. // obf
			"\x03ml;\x02ë\x03ro;\x03€\x02ml\x02ë", // obf
			// exponentiale;[ⅇ] expectation;[ℰ] exist;[∃] excl;[!]. // obf
			"\x0bponentiale;\x03ⅇ\x0apectation;\x03ℰ\x04ist;\x03∃\x03cl;\x01!", // obf
			// fallingdotseq;[≒]. // obf
			"\x0cllingdotseq;\x03≒", // obf
			// fcy;[ф]. // obf
			"\x02y;\x02ф", // obf
			// female;[♀]. // obf
			"\x05male;\x03♀", // obf
			// ffilig;[ﬃ] ffllig;[ﬄ] fflig;[ﬀ] ffr;[𝔣]. // obf
			"\x05ilig;\x03ﬃ\x05llig;\x03ﬄ\x04lig;\x03ﬀ\x02r;\x04𝔣", // obf
			// filig;[ﬁ]. // obf
			"\x04lig;\x03ﬁ", // obf
			// fjlig;[fj]. // obf
			"\x04lig;\x02fj", // obf
			// fllig;[ﬂ] fltns;[▱] flat;[♭]. // obf
			"\x04lig;\x03ﬂ\x04tns;\x03▱\x03at;\x03♭", // obf
			// fnof;[ƒ]. // obf
			"\x03of;\x02ƒ", // obf
			// forall;[∀] forkv;[⫙] fopf;[𝕗] fork;[⋔]. // obf
			"\x05rall;\x03∀\x04rkv;\x03⫙\x03pf;\x04𝕗\x03rk;\x03⋔", // obf
			// fpartint;[⨍]. // obf
			"\x07artint;\x03⨍", // obf
			// frac12;[½] frac13;[⅓] frac14;[¼] frac15;[⅕] frac16;[⅙] frac18;[⅛] frac23;[⅔] frac25;[⅖] frac34;[¾] frac35;[⅗] frac38;[⅜] frac45;[⅘] frac56;[⅚] frac58;[⅝] frac78;[⅞] frac12[½] frac14[¼] frac34[¾] frasl;[⁄] frown;[⌢]. // obf
			"\x05ac12;\x02½\x05ac13;\x03⅓\x05ac14;\x02¼\x05ac15;\x03⅕\x05ac16;\x03⅙\x05ac18;\x03⅛\x05ac23;\x03⅔\x05ac25;\x03⅖\x05ac34;\x02¾\x05ac35;\x03⅗\x05ac38;\x03⅜\x05ac45;\x03⅘\x05ac56;\x03⅚\x05ac58;\x03⅝\x05ac78;\x03⅞\x04ac12\x02½\x04ac14\x02¼\x04ac34\x02¾\x04asl;\x03⁄\x04own;\x03⌢", // obf
			// fscr;[𝒻]. // obf
			"\x03cr;\x04𝒻", // obf
			// gEl;[⪌] gE;[≧]. // obf
			"\x02l;\x03⪌\x01;\x03≧", // obf
			// gacute;[ǵ] gammad;[ϝ] gamma;[γ] gap;[⪆]. // obf
			"\x05cute;\x02ǵ\x05mmad;\x02ϝ\x04mma;\x02γ\x02p;\x03⪆", // obf
			// gbreve;[ğ]. // obf
			"\x05reve;\x02ğ", // obf
			// gcirc;[ĝ] gcy;[г]. // obf
			"\x04irc;\x02ĝ\x02y;\x02г", // obf
			// gdot;[ġ]. // obf
			"\x03ot;\x02ġ", // obf
			// geqslant;[⩾] gesdotol;[⪄] gesdoto;[⪂] gesdot;[⪀] gesles;[⪔] gescc;[⪩] geqq;[≧] gesl;[⋛︀] gel;[⋛] geq;[≥] ges;[⩾] ge;[≥]. // obf
			"\x07qslant;\x03⩾\x07sdotol;\x03⪄\x06sdoto;\x03⪂\x05sdot;\x03⪀\x05sles;\x03⪔\x04scc;\x03⪩\x03qq;\x03≧\x03sl;\x06⋛︀\x02l;\x03⋛\x02q;\x03≥\x02s;\x03⩾\x01;\x03≥", // obf
			// gfr;[𝔤]. // obf
			"\x02r;\x04𝔤", // obf
			// ggg;[⋙] gg;[≫]. // obf
			"\x02g;\x03⋙\x01;\x03≫", // obf
			// gimel;[ℷ]. // obf
			"\x04mel;\x03ℷ", // obf
			// gjcy;[ѓ]. // obf
			"\x03cy;\x02ѓ", // obf
			// glE;[⪒] gla;[⪥] glj;[⪤] gl;[≷]. // obf
			"\x02E;\x03⪒\x02a;\x03⪥\x02j;\x03⪤\x01;\x03≷", // obf
			// gnapprox;[⪊] gneqq;[≩] gnsim;[⋧] gnap;[⪊] gneq;[⪈] gnE;[≩] gne;[⪈]. // obf
			"\x07approx;\x03⪊\x04eqq;\x03≩\x04sim;\x03⋧\x03ap;\x03⪊\x03eq;\x03⪈\x02E;\x03≩\x02e;\x03⪈", // obf
			// gopf;[𝕘]. // obf
			"\x03pf;\x04𝕘", // obf
			// grave;[`]. // obf
			"\x04ave;\x01`", // obf
			// gsime;[⪎] gsiml;[⪐] gscr;[ℊ] gsim;[≳]. // obf
			"\x04ime;\x03⪎\x04iml;\x03⪐\x03cr;\x03ℊ\x03im;\x03≳", // obf
			// gtreqqless;[⪌] gtrapprox;[⪆] gtreqless;[⋛] gtquest;[⩼] gtrless;[≷] gtlPar;[⦕] gtrarr;[⥸] gtrdot;[⋗] gtrsim;[≳] gtcir;[⩺] gtdot;[⋗] gtcc;[⪧] gt;[>]. // obf
			"\x09reqqless;\x03⪌\x08rapprox;\x03⪆\x08reqless;\x03⋛\x06quest;\x03⩼\x06rless;\x03≷\x05lPar;\x03⦕\x05rarr;\x03⥸\x05rdot;\x03⋗\x05rsim;\x03≳\x04cir;\x03⩺\x04dot;\x03⋗\x03cc;\x03⪧\x01;\x01>", // obf
			// gvertneqq;[≩︀] gvnE;[≩︀]. // obf
			"\x08ertneqq;\x06≩︀\x03nE;\x06≩︀", // obf
			// hArr;[⇔]. // obf
			"\x03rr;\x03⇔", // obf
			// harrcir;[⥈] hairsp;[ ] hamilt;[ℋ] hardcy;[ъ] harrw;[↭] half;[½] harr;[↔]. // obf
			"\x06rrcir;\x03⥈\x05irsp;\x03 \x05milt;\x03ℋ\x05rdcy;\x02ъ\x04rrw;\x03↭\x03lf;\x02½\x03rr;\x03↔", // obf
			// hbar;[ℏ]. // obf
			"\x03ar;\x03ℏ", // obf
			// hcirc;[ĥ]. // obf
			"\x04irc;\x02ĥ", // obf
			// heartsuit;[♥] hearts;[♥] hellip;[…] hercon;[⊹]. // obf
			"\x08artsuit;\x03♥\x05arts;\x03♥\x05llip;\x03…\x05rcon;\x03⊹", // obf
			// hfr;[𝔥]. // obf
			"\x02r;\x04𝔥", // obf
			// hksearow;[⤥] hkswarow;[⤦]. // obf
			"\x07searow;\x03⤥\x07swarow;\x03⤦", // obf
			// hookrightarrow;[↪] hookleftarrow;[↩] homtht;[∻] horbar;[―] hoarr;[⇿] hopf;[𝕙]. // obf
			"\x0dokrightarrow;\x03↪\x0cokleftarrow;\x03↩\x05mtht;\x03∻\x05rbar;\x03―\x04arr;\x03⇿\x03pf;\x04𝕙", // obf
			// hslash;[ℏ] hstrok;[ħ] hscr;[𝒽]. // obf
			"\x05lash;\x03ℏ\x05trok;\x02ħ\x03cr;\x04𝒽", // obf
			// hybull;[⁃] hyphen;[‐]. // obf
			"\x05bull;\x03⁃\x05phen;\x03‐", // obf
			// iacute;[í] iacute[í]. // obf
			"\x05cute;\x02í\x04cute\x02í", // obf
			// icirc;[î] icirc[î] icy;[и] ic;[⁣]. // obf
			"\x04irc;\x02î\x03irc\x02î\x02y;\x02и\x01;\x03⁣", // obf
			// iexcl;[¡] iecy;[е] iexcl[¡]. // obf
			"\x04xcl;\x02¡\x03cy;\x02е\x03xcl\x02¡", // obf
			// iff;[⇔] ifr;[𝔦]. // obf
			"\x02f;\x03⇔\x02r;\x04𝔦", // obf
			// igrave;[ì] igrave[ì]. // obf
			"\x05rave;\x02ì\x04rave\x02ì", // obf
			// iiiint;[⨌] iinfin;[⧜] iiint;[∭] iiota;[℩] ii;[ⅈ]. // obf
			"\x05iint;\x03⨌\x05nfin;\x03⧜\x04int;\x03∭\x04ota;\x03℩\x01;\x03ⅈ", // obf
			// ijlig;[ĳ]. // obf
			"\x04lig;\x02ĳ", // obf
			// imagline;[ℐ] imagpart;[ℑ] imacr;[ī] image;[ℑ] imath;[ı] imped;[Ƶ] imof;[⊷]. // obf
			"\x07agline;\x03ℐ\x07agpart;\x03ℑ\x04acr;\x02ī\x04age;\x03ℑ\x04ath;\x02ı\x04ped;\x02Ƶ\x03of;\x03⊷", // obf
			// infintie;[⧝] integers;[ℤ] intercal;[⊺] intlarhk;[⨗] intprod;[⨼] incare;[℅] inodot;[ı] intcal;[⊺] infin;[∞] int;[∫] in;[∈]. // obf
			"\x07fintie;\x03⧝\x07tegers;\x03ℤ\x07tercal;\x03⊺\x07tlarhk;\x03⨗\x06tprod;\x03⨼\x05care;\x03℅\x05odot;\x02ı\x05tcal;\x03⊺\x04fin;\x03∞\x02t;\x03∫\x01;\x03∈", // obf
			// iogon;[į] iocy;[ё] iopf;[𝕚] iota;[ι]. // obf
			"\x04gon;\x02į\x03cy;\x02ё\x03pf;\x04𝕚\x03ta;\x02ι", // obf
			// iprod;[⨼]. // obf
			"\x04rod;\x03⨼", // obf
			// iquest;[¿] iquest[¿]. // obf
			"\x05uest;\x02¿\x04uest\x02¿", // obf
			// isindot;[⋵] isinsv;[⋳] isinE;[⋹] isins;[⋴] isinv;[∈] iscr;[𝒾] isin;[∈]. // obf
			"\x06indot;\x03⋵\x05insv;\x03⋳\x04inE;\x03⋹\x04ins;\x03⋴\x04inv;\x03∈\x03cr;\x04𝒾\x03in;\x03∈", // obf
			// itilde;[ĩ] it;[⁢]. // obf
			"\x05ilde;\x02ĩ\x01;\x03⁢", // obf
			// iukcy;[і] iuml;[ï] iuml[ï]. // obf
			"\x04kcy;\x02і\x03ml;\x02ï\x02ml\x02ï", // obf
			// jcirc;[ĵ] jcy;[й]. // obf
			"\x04irc;\x02ĵ\x02y;\x02й", // obf
			// jfr;[𝔧]. // obf
			"\x02r;\x04𝔧", // obf
			// jmath;[ȷ]. // obf
			"\x04ath;\x02ȷ", // obf
			// jopf;[𝕛]. // obf
			"\x03pf;\x04𝕛", // obf
			// jsercy;[ј] jscr;[𝒿]. // obf
			"\x05ercy;\x02ј\x03cr;\x04𝒿", // obf
			// jukcy;[є]. // obf
			"\x04kcy;\x02є", // obf
			// kappav;[ϰ] kappa;[κ]. // obf
			"\x05ppav;\x02ϰ\x04ppa;\x02κ", // obf
			// kcedil;[ķ] kcy;[к]. // obf
			"\x05edil;\x02ķ\x02y;\x02к", // obf
			// kfr;[𝔨]. // obf
			"\x02r;\x04𝔨", // obf
			// kgreen;[ĸ]. // obf
			"\x05reen;\x02ĸ", // obf
			// khcy;[х]. // obf
			"\x03cy;\x02х", // obf
			// kjcy;[ќ]. // obf
			"\x03cy;\x02ќ", // obf
			// kopf;[𝕜]. // obf
			"\x03pf;\x04𝕜", // obf
			// kscr;[𝓀]. // obf
			"\x03cr;\x04𝓀", // obf
			// lAtail;[⤛] lAarr;[⇚] lArr;[⇐]. // obf
			"\x05tail;\x03⤛\x04arr;\x03⇚\x03rr;\x03⇐", // obf
			// lBarr;[⤎]. // obf
			"\x04arr;\x03⤎", // obf
			// lEg;[⪋] lE;[≦]. // obf
			"\x02g;\x03⪋\x01;\x03≦", // obf
			// lHar;[⥢]. // obf
			"\x03ar;\x03⥢", // obf
			// laemptyv;[⦴] larrbfs;[⤟] larrsim;[⥳] lacute;[ĺ] lagran;[ℒ] lambda;[λ] langle;[⟨] larrfs;[⤝] larrhk;[↩] larrlp;[↫] larrpl;[⤹] larrtl;[↢] latail;[⤙] langd;[⦑] laquo;[«] larrb;[⇤] lates;[⪭︀] lang;[⟨] laquo[«] larr;[←] late;[⪭] lap;[⪅] lat;[⪫]. // obf
			"\x07emptyv;\x03⦴\x06rrbfs;\x03⤟\x06rrsim;\x03⥳\x05cute;\x02ĺ\x05gran;\x03ℒ\x05mbda;\x02λ\x05ngle;\x03⟨\x05rrfs;\x03⤝\x05rrhk;\x03↩\x05rrlp;\x03↫\x05rrpl;\x03⤹\x05rrtl;\x03↢\x05tail;\x03⤙\x04ngd;\x03⦑\x04quo;\x02«\x04rrb;\x03⇤\x04tes;\x06⪭︀\x03ng;\x03⟨\x03quo\x02«\x03rr;\x03←\x03te;\x03⪭\x02p;\x03⪅\x02t;\x03⪫", // obf
			// lbrksld;[⦏] lbrkslu;[⦍] lbrace;[{] lbrack;[[] lbarr;[⤌] lbbrk;[❲] lbrke;[⦋]. // obf
			"\x06rksld;\x03⦏\x06rkslu;\x03⦍\x05race;\x01{\x05rack;\x01[\x04arr;\x03⤌\x04brk;\x03❲\x04rke;\x03⦋", // obf
			// lcaron;[ľ] lcedil;[ļ] lceil;[⌈] lcub;[{] lcy;[л]. // obf
			"\x05aron;\x02ľ\x05edil;\x02ļ\x04eil;\x03⌈\x03ub;\x01{\x02y;\x02л", // obf
			// ldrushar;[⥋] ldrdhar;[⥧] ldquor;[„] ldquo;[“] ldca;[⤶] ldsh;[↲]. // obf
			"\x07rushar;\x03⥋\x06rdhar;\x03⥧\x05quor;\x03„\x04quo;\x03“\x03ca;\x03⤶\x03sh;\x03↲", // obf
			// leftrightsquigarrow;[↭] leftrightharpoons;[⇋] leftharpoondown;[↽] leftrightarrows;[⇆] leftleftarrows;[⇇] leftrightarrow;[↔] leftthreetimes;[⋋] leftarrowtail;[↢] leftharpoonup;[↼] lessapprox;[⪅] lesseqqgtr;[⪋] leftarrow;[←] lesseqgtr;[⋚] leqslant;[⩽] lesdotor;[⪃] lesdoto;[⪁] lessdot;[⋖] lessgtr;[≶] lesssim;[≲] lesdot;[⩿] lesges;[⪓] lescc;[⪨] leqq;[≦] lesg;[⋚︀] leg;[⋚] leq;[≤] les;[⩽] le;[≤]. // obf
			"\x12ftrightsquigarrow;\x03↭\x10ftrightharpoons;\x03⇋\x0eftharpoondown;\x03↽\x0eftrightarrows;\x03⇆\x0dftleftarrows;\x03⇇\x0dftrightarrow;\x03↔\x0dftthreetimes;\x03⋋\x0cftarrowtail;\x03↢\x0cftharpoonup;\x03↼\x09ssapprox;\x03⪅\x09sseqqgtr;\x03⪋\x08ftarrow;\x03←\x08sseqgtr;\x03⋚\x07qslant;\x03⩽\x07sdotor;\x03⪃\x06sdoto;\x03⪁\x06ssdot;\x03⋖\x06ssgtr;\x03≶\x06sssim;\x03≲\x05sdot;\x03⩿\x05sges;\x03⪓\x04scc;\x03⪨\x03qq;\x03≦\x03sg;\x06⋚︀\x02g;\x03⋚\x02q;\x03≤\x02s;\x03⩽\x01;\x03≤", // obf
			// lfisht;[⥼] lfloor;[⌊] lfr;[𝔩]. // obf
			"\x05isht;\x03⥼\x05loor;\x03⌊\x02r;\x04𝔩", // obf
			// lgE;[⪑] lg;[≶]. // obf
			"\x02E;\x03⪑\x01;\x03≶", // obf
			// lharul;[⥪] lhard;[↽] lharu;[↼] lhblk;[▄]. // obf
			"\x05arul;\x03⥪\x04ard;\x03↽\x04aru;\x03↼\x04blk;\x03▄", // obf
			// ljcy;[љ]. // obf
			"\x03cy;\x02љ", // obf
			// llcorner;[⌞] llhard;[⥫] llarr;[⇇] lltri;[◺] ll;[≪]. // obf
			"\x07corner;\x03⌞\x05hard;\x03⥫\x04arr;\x03⇇\x04tri;\x03◺\x01;\x03≪", // obf
			// lmoustache;[⎰] lmidot;[ŀ] lmoust;[⎰]. // obf
			"\x09oustache;\x03⎰\x05idot;\x02ŀ\x05oust;\x03⎰", // obf
			// lnapprox;[⪉] lneqq;[≨] lnsim;[⋦] lnap;[⪉] lneq;[⪇] lnE;[≨] lne;[⪇]. // obf
			"\x07approx;\x03⪉\x04eqq;\x03≨\x04sim;\x03⋦\x03ap;\x03⪉\x03eq;\x03⪇\x02E;\x03≨\x02e;\x03⪇", // obf
			// longleftrightarrow;[⟷] longrightarrow;[⟶] looparrowright;[↬] longleftarrow;[⟵] looparrowleft;[↫] longmapsto;[⟼] lotimes;[⨴] lozenge;[◊] loplus;[⨭] lowast;[∗] lowbar;[_] loang;[⟬] loarr;[⇽] lobrk;[⟦] lopar;[⦅] lopf;[𝕝] lozf;[⧫] loz;[◊]. // obf
			"\x11ngleftrightarrow;\x03⟷\x0dngrightarrow;\x03⟶\x0doparrowright;\x03↬\x0cngleftarrow;\x03⟵\x0coparrowleft;\x03↫\x09ngmapsto;\x03⟼\x06times;\x03⨴\x06zenge;\x03◊\x05plus;\x03⨭\x05wast;\x03∗\x05wbar;\x01_\x04ang;\x03⟬\x04arr;\x03⇽\x04brk;\x03⟦\x04par;\x03⦅\x03pf;\x04𝕝\x03zf;\x03⧫\x02z;\x03◊", // obf
			// lparlt;[⦓] lpar;[(]. // obf
			"\x05arlt;\x03⦓\x03ar;\x01(", // obf
			// lrcorner;[⌟] lrhard;[⥭] lrarr;[⇆] lrhar;[⇋] lrtri;[⊿] lrm;[‎]. // obf
			"\x07corner;\x03⌟\x05hard;\x03⥭\x04arr;\x03⇆\x04har;\x03⇋\x04tri;\x03⊿\x02m;\x03‎", // obf
			// lsaquo;[‹] lsquor;[‚] lstrok;[ł] lsime;[⪍] lsimg;[⪏] lsquo;[‘] lscr;[𝓁] lsim;[≲] lsqb;[[] lsh;[↰]. // obf
			"\x05aquo;\x03‹\x05quor;\x03‚\x05trok;\x02ł\x04ime;\x03⪍\x04img;\x03⪏\x04quo;\x03‘\x03cr;\x04𝓁\x03im;\x03≲\x03qb;\x01[\x02h;\x03↰", // obf
			// ltquest;[⩻] lthree;[⋋] ltimes;[⋉] ltlarr;[⥶] ltrPar;[⦖] ltcir;[⩹] ltdot;[⋖] ltrie;[⊴] ltrif;[◂] ltcc;[⪦] ltri;[◃] lt;[<]. // obf
			"\x06quest;\x03⩻\x05hree;\x03⋋\x05imes;\x03⋉\x05larr;\x03⥶\x05rPar;\x03⦖\x04cir;\x03⩹\x04dot;\x03⋖\x04rie;\x03⊴\x04rif;\x03◂\x03cc;\x03⪦\x03ri;\x03◃\x01;\x01<", // obf
			// lurdshar;[⥊] luruhar;[⥦]. // obf
			"\x07rdshar;\x03⥊\x06ruhar;\x03⥦", // obf
			// lvertneqq;[≨︀] lvnE;[≨︀]. // obf
			"\x08ertneqq;\x06≨︀\x03nE;\x06≨︀", // obf
			// mDDot;[∺]. // obf
			"\x04Dot;\x03∺", // obf
			// mapstodown;[↧] mapstoleft;[↤] mapstoup;[↥] maltese;[✠] mapsto;[↦] marker;[▮] macr;[¯] male;[♂] malt;[✠] macr[¯] map;[↦]. // obf
			"\x09pstodown;\x03↧\x09pstoleft;\x03↤\x07pstoup;\x03↥\x06ltese;\x03✠\x05psto;\x03↦\x05rker;\x03▮\x03cr;\x02¯\x03le;\x03♂\x03lt;\x03✠\x02cr\x02¯\x02p;\x03↦", // obf
			// mcomma;[⨩] mcy;[м]. // obf
			"\x05omma;\x03⨩\x02y;\x02м", // obf
			// mdash;[—]. // obf
			"\x04ash;\x03—", // obf
			// measuredangle;[∡]. // obf
			"\x0casuredangle;\x03∡", // obf
			// mfr;[𝔪]. // obf
			"\x02r;\x04𝔪", // obf
			// mho;[℧]. // obf
			"\x02o;\x03℧", // obf
			// minusdu;[⨪] midast;[*] midcir;[⫰] middot;[·] minusb;[⊟] minusd;[∸] micro;[µ] middot[·] minus;[−] micro[µ] mid;[∣]. // obf
			"\x06nusdu;\x03⨪\x05dast;\x01*\x05dcir;\x03⫰\x05ddot;\x02·\x05nusb;\x03⊟\x05nusd;\x03∸\x04cro;\x02µ\x04ddot\x02·\x04nus;\x03−\x03cro\x02µ\x02d;\x03∣", // obf
			// mlcp;[⫛] mldr;[…]. // obf
			"\x03cp;\x03⫛\x03dr;\x03…", // obf
			// mnplus;[∓]. // obf
			"\x05plus;\x03∓", // obf
			// models;[⊧] mopf;[𝕞]. // obf
			"\x05dels;\x03⊧\x03pf;\x04𝕞", // obf
			// mp;[∓]. // obf
			"\x01;\x03∓", // obf
			// mstpos;[∾] mscr;[𝓂]. // obf
			"\x05tpos;\x03∾\x03cr;\x04𝓂", // obf
			// multimap;[⊸] mumap;[⊸] mu;[μ]. // obf
			"\x07ltimap;\x03⊸\x04map;\x03⊸\x01;\x02μ", // obf
			// nGtv;[≫̸] nGg;[⋙̸] nGt;[≫⃒]. // obf
			"\x03tv;\x05≫̸\x02g;\x05⋙̸\x02t;\x06≫⃒", // obf
			// nLeftrightarrow;[⇎] nLeftarrow;[⇍] nLtv;[≪̸] nLl;[⋘̸] nLt;[≪⃒]. // obf
			"\x0eeftrightarrow;\x03⇎\x09eftarrow;\x03⇍\x03tv;\x05≪̸\x02l;\x05⋘̸\x02t;\x06≪⃒", // obf
			// nRightarrow;[⇏]. // obf
			"\x0aightarrow;\x03⇏", // obf
			// nVDash;[⊯] nVdash;[⊮]. // obf
			"\x05Dash;\x03⊯\x05dash;\x03⊮", // obf
			// naturals;[ℕ] napprox;[≉] natural;[♮] nacute;[ń] nabla;[∇] napid;[≋̸] napos;[ŉ] natur;[♮] nang;[∠⃒] napE;[⩰̸] nap;[≉]. // obf
			"\x07turals;\x03ℕ\x06pprox;\x03≉\x06tural;\x03♮\x05cute;\x02ń\x04bla;\x03∇\x04pid;\x05≋̸\x04pos;\x02ŉ\x04tur;\x03♮\x03ng;\x06∠⃒\x03pE;\x05⩰̸\x02p;\x03≉", // obf
			// nbumpe;[≏̸] nbump;[≎̸] nbsp;[ ] nbsp[ ]. // obf
			"\x05umpe;\x05≏̸\x04ump;\x05≎̸\x03sp;\x02 \x02sp\x02 ", // obf
			// ncongdot;[⩭̸] ncaron;[ň] ncedil;[ņ] ncong;[≇] ncap;[⩃] ncup;[⩂] ncy;[н]. // obf
			"\x07ongdot;\x05⩭̸\x05aron;\x02ň\x05edil;\x02ņ\x04ong;\x03≇\x03ap;\x03⩃\x03up;\x03⩂\x02y;\x02н", // obf
			// ndash;[–]. // obf
			"\x04ash;\x03–", // obf
			// nearrow;[↗] nexists;[∄] nearhk;[⤤] nequiv;[≢] nesear;[⤨] nexist;[∄] neArr;[⇗] nearr;[↗] nedot;[≐̸] nesim;[≂̸] ne;[≠]. // obf
			"\x06arrow;\x03↗\x06xists;\x03∄\x05arhk;\x03⤤\x05quiv;\x03≢\x05sear;\x03⤨\x05xist;\x03∄\x04Arr;\x03⇗\x04arr;\x03↗\x04dot;\x05≐̸\x04sim;\x05≂̸\x01;\x03≠", // obf
			// nfr;[𝔫]. // obf
			"\x02r;\x04𝔫", // obf
			// ngeqslant;[⩾̸] ngeqq;[≧̸] ngsim;[≵] ngeq;[≱] nges;[⩾̸] ngtr;[≯] ngE;[≧̸] nge;[≱] ngt;[≯]. // obf
			"\x08eqslant;\x05⩾̸\x04eqq;\x05≧̸\x04sim;\x03≵\x03eq;\x03≱\x03es;\x05⩾̸\x03tr;\x03≯\x02E;\x05≧̸\x02e;\x03≱\x02t;\x03≯", // obf
			// nhArr;[⇎] nharr;[↮] nhpar;[⫲]. // obf
			"\x04Arr;\x03⇎\x04arr;\x03↮\x04par;\x03⫲", // obf
			// nisd;[⋺] nis;[⋼] niv;[∋] ni;[∋]. // obf
			"\x03sd;\x03⋺\x02s;\x03⋼\x02v;\x03∋\x01;\x03∋", // obf
			// njcy;[њ]. // obf
			"\x03cy;\x02њ", // obf
			// nleftrightarrow;[↮] nleftarrow;[↚] nleqslant;[⩽̸] nltrie;[⋬] nlArr;[⇍] nlarr;[↚] nleqq;[≦̸] nless;[≮] nlsim;[≴] nltri;[⋪] nldr;[‥] nleq;[≰] nles;[⩽̸] nlE;[≦̸] nle;[≰] nlt;[≮]. // obf
			"\x0eeftrightarrow;\x03↮\x09eftarrow;\x03↚\x08eqslant;\x05⩽̸\x05trie;\x03⋬\x04Arr;\x03⇍\x04arr;\x03↚\x04eqq;\x05≦̸\x04ess;\x03≮\x04sim;\x03≴\x04tri;\x03⋪\x03dr;\x03‥\x03eq;\x03≰\x03es;\x05⩽̸\x02E;\x05≦̸\x02e;\x03≰\x02t;\x03≮", // obf
			// nmid;[∤]. // obf
			"\x03id;\x03∤", // obf
			// notindot;[⋵̸] notinva;[∉] notinvb;[⋷] notinvc;[⋶] notniva;[∌] notnivb;[⋾] notnivc;[⋽] notinE;[⋹̸] notin;[∉] notni;[∌] nopf;[𝕟] not;[¬] not[¬]. // obf
			"\x07tindot;\x05⋵̸\x06tinva;\x03∉\x06tinvb;\x03⋷\x06tinvc;\x03⋶\x06tniva;\x03∌\x06tnivb;\x03⋾\x06tnivc;\x03⋽\x05tinE;\x05⋹̸\x04tin;\x03∉\x04tni;\x03∌\x03pf;\x04𝕟\x02t;\x02¬\x01t\x02¬", // obf
			// nparallel;[∦] npolint;[⨔] npreceq;[⪯̸] nparsl;[⫽⃥] nprcue;[⋠] npart;[∂̸] nprec;[⊀] npar;[∦] npre;[⪯̸] npr;[⊀]. // obf
			"\x08arallel;\x03∦\x06olint;\x03⨔\x06receq;\x05⪯̸\x05arsl;\x06⫽⃥\x05rcue;\x03⋠\x04art;\x05∂̸\x04rec;\x03⊀\x03ar;\x03∦\x03re;\x05⪯̸\x02r;\x03⊀", // obf
			// nrightarrow;[↛] nrarrc;[⤳̸] nrarrw;[↝̸] nrtrie;[⋭] nrArr;[⇏] nrarr;[↛] nrtri;[⋫]. // obf
			"\x0aightarrow;\x03↛\x05arrc;\x05⤳̸\x05arrw;\x05↝̸\x05trie;\x03⋭\x04Arr;\x03⇏\x04arr;\x03↛\x04tri;\x03⋫", // obf
			// nshortparallel;[∦] nsubseteqq;[⫅̸] nsupseteqq;[⫆̸] nshortmid;[∤] nsubseteq;[⊈] nsupseteq;[⊉] nsqsube;[⋢] nsqsupe;[⋣] nsubset;[⊂⃒] nsucceq;[⪰̸] nsupset;[⊃⃒] nsccue;[⋡] nsimeq;[≄] nsime;[≄] nsmid;[∤] nspar;[∦] nsubE;[⫅̸] nsube;[⊈] nsucc;[⊁] nsupE;[⫆̸] nsupe;[⊉] nsce;[⪰̸] nscr;[𝓃] nsim;[≁] nsub;[⊄] nsup;[⊅] nsc;[⊁]. // obf
			"\x0dhortparallel;\x03∦\x09ubseteqq;\x05⫅̸\x09upseteqq;\x05⫆̸\x08hortmid;\x03∤\x08ubseteq;\x03⊈\x08upseteq;\x03⊉\x06qsube;\x03⋢\x06qsupe;\x03⋣\x06ubset;\x06⊂⃒\x06ucceq;\x05⪰̸\x06upset;\x06⊃⃒\x05ccue;\x03⋡\x05imeq;\x03≄\x04ime;\x03≄\x04mid;\x03∤\x04par;\x03∦\x04ubE;\x05⫅̸\x04ube;\x03⊈\x04ucc;\x03⊁\x04upE;\x05⫆̸\x04upe;\x03⊉\x03ce;\x05⪰̸\x03cr;\x04𝓃\x03im;\x03≁\x03ub;\x03⊄\x03up;\x03⊅\x02c;\x03⊁", // obf
			// ntrianglerighteq;[⋭] ntrianglelefteq;[⋬] ntriangleright;[⋫] ntriangleleft;[⋪] ntilde;[ñ] ntilde[ñ] ntgl;[≹] ntlg;[≸]. // obf
			"\x0frianglerighteq;\x03⋭\x0erianglelefteq;\x03⋬\x0driangleright;\x03⋫\x0criangleleft;\x03⋪\x05ilde;\x02ñ\x04ilde\x02ñ\x03gl;\x03≹\x03lg;\x03≸", // obf
			// numero;[№] numsp;[ ] num;[#] nu;[ν]. // obf
			"\x05mero;\x03№\x04msp;\x03 \x02m;\x01#\x01;\x02ν", // obf
			// nvinfin;[⧞] nvltrie;[⊴⃒] nvrtrie;[⊵⃒] nvDash;[⊭] nvHarr;[⤄] nvdash;[⊬] nvlArr;[⤂] nvrArr;[⤃] nvsim;[∼⃒] nvap;[≍⃒] nvge;[≥⃒] nvgt;[>⃒] nvle;[≤⃒] nvlt;[<⃒]. // obf
			"\x06infin;\x03⧞\x06ltrie;\x06⊴⃒\x06rtrie;\x06⊵⃒\x05Dash;\x03⊭\x05Harr;\x03⤄\x05dash;\x03⊬\x05lArr;\x03⤂\x05rArr;\x03⤃\x04sim;\x06∼⃒\x03ap;\x06≍⃒\x03ge;\x06≥⃒\x03gt;\x04>⃒\x03le;\x06≤⃒\x03lt;\x04<⃒", // obf
			// nwarrow;[↖] nwarhk;[⤣] nwnear;[⤧] nwArr;[⇖] nwarr;[↖]. // obf
			"\x06arrow;\x03↖\x05arhk;\x03⤣\x05near;\x03⤧\x04Arr;\x03⇖\x04arr;\x03↖", // obf
			// oS;[Ⓢ]. // obf
			"\x01;\x03Ⓢ", // obf
			// oacute;[ó] oacute[ó] oast;[⊛]. // obf
			"\x05cute;\x02ó\x04cute\x02ó\x03st;\x03⊛", // obf
			// ocirc;[ô] ocir;[⊚] ocirc[ô] ocy;[о]. // obf
			"\x04irc;\x02ô\x03ir;\x03⊚\x03irc\x02ô\x02y;\x02о", // obf
			// odblac;[ő] odsold;[⦼] odash;[⊝] odiv;[⨸] odot;[⊙]. // obf
			"\x05blac;\x02ő\x05sold;\x03⦼\x04ash;\x03⊝\x03iv;\x03⨸\x03ot;\x03⊙", // obf
			// oelig;[œ]. // obf
			"\x04lig;\x02œ", // obf
			// ofcir;[⦿] ofr;[𝔬]. // obf
			"\x04cir;\x03⦿\x02r;\x04𝔬", // obf
			// ograve;[ò] ograve[ò] ogon;[˛] ogt;[⧁]. // obf
			"\x05rave;\x02ò\x04rave\x02ò\x03on;\x02˛\x02t;\x03⧁", // obf
			// ohbar;[⦵] ohm;[Ω]. // obf
			"\x04bar;\x03⦵\x02m;\x02Ω", // obf
			// oint;[∮]. // obf
			"\x03nt;\x03∮", // obf
			// olcross;[⦻] olarr;[↺] olcir;[⦾] oline;[‾] olt;[⧀]. // obf
			"\x06cross;\x03⦻\x04arr;\x03↺\x04cir;\x03⦾\x04ine;\x03‾\x02t;\x03⧀", // obf
			// omicron;[ο] ominus;[⊖] omacr;[ō] omega;[ω] omid;[⦶]. // obf
			"\x06icron;\x02ο\x05inus;\x03⊖\x04acr;\x02ō\x04ega;\x02ω\x03id;\x03⦶", // obf
			// oopf;[𝕠]. // obf
			"\x03pf;\x04𝕠", // obf
			// operp;[⦹] oplus;[⊕] opar;[⦷]. // obf
			"\x04erp;\x03⦹\x04lus;\x03⊕\x03ar;\x03⦷", // obf
			// orderof;[ℴ] orslope;[⩗] origof;[⊶] orarr;[↻] order;[ℴ] ordf;[ª] ordm;[º] oror;[⩖] ord;[⩝] ordf[ª] ordm[º] orv;[⩛] or;[∨]. // obf
			"\x06derof;\x03ℴ\x06slope;\x03⩗\x05igof;\x03⊶\x04arr;\x03↻\x04der;\x03ℴ\x03df;\x02ª\x03dm;\x02º\x03or;\x03⩖\x02d;\x03⩝\x02df\x02ª\x02dm\x02º\x02v;\x03⩛\x01;\x03∨", // obf
			// oslash;[ø] oslash[ø] oscr;[ℴ] osol;[⊘]. // obf
			"\x05lash;\x02ø\x04lash\x02ø\x03cr;\x03ℴ\x03ol;\x03⊘", // obf
			// otimesas;[⨶] otilde;[õ] otimes;[⊗] otilde[õ]. // obf
			"\x07imesas;\x03⨶\x05ilde;\x02õ\x05imes;\x03⊗\x04ilde\x02õ", // obf
			// ouml;[ö] ouml[ö]. // obf
			"\x03ml;\x02ö\x02ml\x02ö", // obf
			// ovbar;[⌽]. // obf
			"\x04bar;\x03⌽", // obf
			// parallel;[∥] parsim;[⫳] parsl;[⫽] para;[¶] part;[∂] par;[∥] para[¶]. // obf
			"\x07rallel;\x03∥\x05rsim;\x03⫳\x04rsl;\x03⫽\x03ra;\x02¶\x03rt;\x03∂\x02r;\x03∥\x02ra\x02¶", // obf
			// pcy;[п]. // obf
			"\x02y;\x02п", // obf
			// pertenk;[‱] percnt;[%] period;[.] permil;[‰] perp;[⊥]. // obf
			"\x06rtenk;\x03‱\x05rcnt;\x01%\x05riod;\x01.\x05rmil;\x03‰\x03rp;\x03⊥", // obf
			// pfr;[𝔭]. // obf
			"\x02r;\x04𝔭", // obf
			// phmmat;[ℳ] phone;[☎] phiv;[ϕ] phi;[φ]. // obf
			"\x05mmat;\x03ℳ\x04one;\x03☎\x03iv;\x02ϕ\x02i;\x02φ", // obf
			// pitchfork;[⋔] piv;[ϖ] pi;[π]. // obf
			"\x08tchfork;\x03⋔\x02v;\x02ϖ\x01;\x02π", // obf
			// plusacir;[⨣] planckh;[ℎ] pluscir;[⨢] plussim;[⨦] plustwo;[⨧] planck;[ℏ] plankv;[ℏ] plusdo;[∔] plusdu;[⨥] plusmn;[±] plusb;[⊞] pluse;[⩲] plusmn[±] plus;[+]. // obf
			"\x07usacir;\x03⨣\x06anckh;\x03ℎ\x06uscir;\x03⨢\x06ussim;\x03⨦\x06ustwo;\x03⨧\x05anck;\x03ℏ\x05ankv;\x03ℏ\x05usdo;\x03∔\x05usdu;\x03⨥\x05usmn;\x02±\x04usb;\x03⊞\x04use;\x03⩲\x04usmn\x02±\x03us;\x01+", // obf
			// pm;[±]. // obf
			"\x01;\x02±", // obf
			// pointint;[⨕] pound;[£] popf;[𝕡] pound[£]. // obf
			"\x07intint;\x03⨕\x04und;\x02£\x03pf;\x04𝕡\x03und\x02£", // obf
			// preccurlyeq;[≼] precnapprox;[⪹] precapprox;[⪷] precneqq;[⪵] precnsim;[⋨] profalar;[⌮] profline;[⌒] profsurf;[⌓] precsim;[≾] preceq;[⪯] primes;[ℙ] prnsim;[⋨] propto;[∝] prurel;[⊰] prcue;[≼] prime;[′] prnap;[⪹] prsim;[≾] prap;[⪷] prec;[≺] prnE;[⪵] prod;[∏] prop;[∝] prE;[⪳] pre;[⪯] pr;[≺]. // obf
			"\x0aeccurlyeq;\x03≼\x0aecnapprox;\x03⪹\x09ecapprox;\x03⪷\x07ecneqq;\x03⪵\x07ecnsim;\x03⋨\x07ofalar;\x03⌮\x07ofline;\x03⌒\x07ofsurf;\x03⌓\x06ecsim;\x03≾\x05eceq;\x03⪯\x05imes;\x03ℙ\x05nsim;\x03⋨\x05opto;\x03∝\x05urel;\x03⊰\x04cue;\x03≼\x04ime;\x03′\x04nap;\x03⪹\x04sim;\x03≾\x03ap;\x03⪷\x03ec;\x03≺\x03nE;\x03⪵\x03od;\x03∏\x03op;\x03∝\x02E;\x03⪳\x02e;\x03⪯\x01;\x03≺", // obf
			// pscr;[𝓅] psi;[ψ]. // obf
			"\x03cr;\x04𝓅\x02i;\x02ψ", // obf
			// puncsp;[ ]. // obf
			"\x05ncsp;\x03 ", // obf
			// qfr;[𝔮]. // obf
			"\x02r;\x04𝔮", // obf
			// qint;[⨌]. // obf
			"\x03nt;\x03⨌", // obf
			// qopf;[𝕢]. // obf
			"\x03pf;\x04𝕢", // obf
			// qprime;[⁗]. // obf
			"\x05rime;\x03⁗", // obf
			// qscr;[𝓆]. // obf
			"\x03cr;\x04𝓆", // obf
			// quaternions;[ℍ] quatint;[⨖] questeq;[≟] quest;[?] quot;[\"] quot[\"]. // obf
			"\x0aaternions;\x03ℍ\x06atint;\x03⨖\x06esteq;\x03≟\x04est;\x01?\x03ot;\x01\"\x02ot\x01\"", // obf
			// rAtail;[⤜] rAarr;[⇛] rArr;[⇒]. // obf
			"\x05tail;\x03⤜\x04arr;\x03⇛\x03rr;\x03⇒", // obf
			// rBarr;[⤏]. // obf
			"\x04arr;\x03⤏", // obf
			// rHar;[⥤]. // obf
			"\x03ar;\x03⥤", // obf
			// rationals;[ℚ] raemptyv;[⦳] rarrbfs;[⤠] rarrsim;[⥴] racute;[ŕ] rangle;[⟩] rarrap;[⥵] rarrfs;[⤞] rarrhk;[↪] rarrlp;[↬] rarrpl;[⥅] rarrtl;[↣] ratail;[⤚] radic;[√] rangd;[⦒] range;[⦥] raquo;[»] rarrb;[⇥] rarrc;[⤳] rarrw;[↝] ratio;[∶] race;[∽̱] rang;[⟩] raquo[»] rarr;[→]. // obf
			"\x08tionals;\x03ℚ\x07emptyv;\x03⦳\x06rrbfs;\x03⤠\x06rrsim;\x03⥴\x05cute;\x02ŕ\x05ngle;\x03⟩\x05rrap;\x03⥵\x05rrfs;\x03⤞\x05rrhk;\x03↪\x05rrlp;\x03↬\x05rrpl;\x03⥅\x05rrtl;\x03↣\x05tail;\x03⤚\x04dic;\x03√\x04ngd;\x03⦒\x04nge;\x03⦥\x04quo;\x02»\x04rrb;\x03⇥\x04rrc;\x03⤳\x04rrw;\x03↝\x04tio;\x03∶\x03ce;\x05∽̱\x03ng;\x03⟩\x03quo\x02»\x03rr;\x03→", // obf
			// rbrksld;[⦎] rbrkslu;[⦐] rbrace;[}] rbrack;[]] rbarr;[⤍] rbbrk;[❳] rbrke;[⦌]. // obf
			"\x06rksld;\x03⦎\x06rkslu;\x03⦐\x05race;\x01}\x05rack;\x01]\x04arr;\x03⤍\x04brk;\x03❳\x04rke;\x03⦌", // obf
			// rcaron;[ř] rcedil;[ŗ] rceil;[⌉] rcub;[}] rcy;[р]. // obf
			"\x05aron;\x02ř\x05edil;\x02ŗ\x04eil;\x03⌉\x03ub;\x01}\x02y;\x02р", // obf
			// rdldhar;[⥩] rdquor;[”] rdquo;[”] rdca;[⤷] rdsh;[↳]. // obf
			"\x06ldhar;\x03⥩\x05quor;\x03”\x04quo;\x03”\x03ca;\x03⤷\x03sh;\x03↳", // obf
			// realpart;[ℜ] realine;[ℛ] reals;[ℝ] real;[ℜ] rect;[▭] reg;[®] reg[®]. // obf
			"\x07alpart;\x03ℜ\x06aline;\x03ℛ\x04als;\x03ℝ\x03al;\x03ℜ\x03ct;\x03▭\x02g;\x02®\x01g\x02®", // obf
			// rfisht;[⥽] rfloor;[⌋] rfr;[𝔯]. // obf
			"\x05isht;\x03⥽\x05loor;\x03⌋\x02r;\x04𝔯", // obf
			// rharul;[⥬] rhard;[⇁] rharu;[⇀] rhov;[ϱ] rho;[ρ]. // obf
			"\x05arul;\x03⥬\x04ard;\x03⇁\x04aru;\x03⇀\x03ov;\x02ϱ\x02o;\x02ρ", // obf
			// rightleftharpoons;[⇌] rightharpoondown;[⇁] rightrightarrows;[⇉] rightleftarrows;[⇄] rightsquigarrow;[↝] rightthreetimes;[⋌] rightarrowtail;[↣] rightharpoonup;[⇀] risingdotseq;[≓] rightarrow;[→] ring;[˚]. // obf
			"\x10ghtleftharpoons;\x03⇌\x0fghtharpoondown;\x03⇁\x0fghtrightarrows;\x03⇉\x0eghtleftarrows;\x03⇄\x0eghtsquigarrow;\x03↝\x0eghtthreetimes;\x03⋌\x0dghtarrowtail;\x03↣\x0dghtharpoonup;\x03⇀\x0bsingdotseq;\x03≓\x09ghtarrow;\x03→\x03ng;\x02˚", // obf
			// rlarr;[⇄] rlhar;[⇌] rlm;[‏]. // obf
			"\x04arr;\x03⇄\x04har;\x03⇌\x02m;\x03‏", // obf
			// rmoustache;[⎱] rmoust;[⎱]. // obf
			"\x09oustache;\x03⎱\x05oust;\x03⎱", // obf
			// rnmid;[⫮]. // obf
			"\x04mid;\x03⫮", // obf
			// rotimes;[⨵] roplus;[⨮] roang;[⟭] roarr;[⇾] robrk;[⟧] ropar;[⦆] ropf;[𝕣]. // obf
			"\x06times;\x03⨵\x05plus;\x03⨮\x04ang;\x03⟭\x04arr;\x03⇾\x04brk;\x03⟧\x04par;\x03⦆\x03pf;\x04𝕣", // obf
			// rppolint;[⨒] rpargt;[⦔] rpar;[)]. // obf
			"\x07polint;\x03⨒\x05argt;\x03⦔\x03ar;\x01)", // obf
			// rrarr;[⇉]. // obf
			"\x04arr;\x03⇉", // obf
			// rsaquo;[›] rsquor;[’] rsquo;[’] rscr;[𝓇] rsqb;[]] rsh;[↱]. // obf
			"\x05aquo;\x03›\x05quor;\x03’\x04quo;\x03’\x03cr;\x04𝓇\x03qb;\x01]\x02h;\x03↱", // obf
			// rtriltri;[⧎] rthree;[⋌] rtimes;[⋊] rtrie;[⊵] rtrif;[▸] rtri;[▹]. // obf
			"\x07riltri;\x03⧎\x05hree;\x03⋌\x05imes;\x03⋊\x04rie;\x03⊵\x04rif;\x03▸\x03ri;\x03▹", // obf
			// ruluhar;[⥨]. // obf
			"\x06luhar;\x03⥨", // obf
			// rx;[℞]. // obf
			"\x01;\x03℞", // obf
			// sacute;[ś]. // obf
			"\x05cute;\x02ś", // obf
			// sbquo;[‚]. // obf
			"\x04quo;\x03‚", // obf
			// scpolint;[⨓] scaron;[š] scedil;[ş] scnsim;[⋩] sccue;[≽] scirc;[ŝ] scnap;[⪺] scsim;[≿] scap;[⪸] scnE;[⪶] scE;[⪴] sce;[⪰] scy;[с] sc;[≻]. // obf
			"\x07polint;\x03⨓\x05aron;\x02š\x05edil;\x02ş\x05nsim;\x03⋩\x04cue;\x03≽\x04irc;\x02ŝ\x04nap;\x03⪺\x04sim;\x03≿\x03ap;\x03⪸\x03nE;\x03⪶\x02E;\x03⪴\x02e;\x03⪰\x02y;\x02с\x01;\x03≻", // obf
			// sdotb;[⊡] sdote;[⩦] sdot;[⋅]. // obf
			"\x04otb;\x03⊡\x04ote;\x03⩦\x03ot;\x03⋅", // obf
			// setminus;[∖] searrow;[↘] searhk;[⤥] seswar;[⤩] seArr;[⇘] searr;[↘] setmn;[∖] sect;[§] semi;[;] sext;[✶] sect[§]. // obf
			"\x07tminus;\x03∖\x06arrow;\x03↘\x05arhk;\x03⤥\x05swar;\x03⤩\x04Arr;\x03⇘\x04arr;\x03↘\x04tmn;\x03∖\x03ct;\x02§\x03mi;\x01;\x03xt;\x03✶\x02ct\x02§", // obf
			// sfrown;[⌢] sfr;[𝔰]. // obf
			"\x05rown;\x03⌢\x02r;\x04𝔰", // obf
			// shortparallel;[∥] shortmid;[∣] shchcy;[щ] sharp;[♯] shcy;[ш] shy;[­] shy[­]. // obf
			"\x0cortparallel;\x03∥\x07ortmid;\x03∣\x05chcy;\x02щ\x04arp;\x03♯\x03cy;\x02ш\x02y;\x02­\x01y\x02­", // obf
			// simplus;[⨤] simrarr;[⥲] sigmaf;[ς] sigmav;[ς] simdot;[⩪] sigma;[σ] simeq;[≃] simgE;[⪠] simlE;[⪟] simne;[≆] sime;[≃] simg;[⪞] siml;[⪝] sim;[∼]. // obf
			"\x06mplus;\x03⨤\x06mrarr;\x03⥲\x05gmaf;\x02ς\x05gmav;\x02ς\x05mdot;\x03⩪\x04gma;\x02σ\x04meq;\x03≃\x04mgE;\x03⪠\x04mlE;\x03⪟\x04mne;\x03≆\x03me;\x03≃\x03mg;\x03⪞\x03ml;\x03⪝\x02m;\x03∼", // obf
			// slarr;[←]. // obf
			"\x04arr;\x03←", // obf
			// smallsetminus;[∖] smeparsl;[⧤] smashp;[⨳] smile;[⌣] smtes;[⪬︀] smid;[∣] smte;[⪬] smt;[⪪]. // obf
			"\x0callsetminus;\x03∖\x07eparsl;\x03⧤\x05ashp;\x03⨳\x04ile;\x03⌣\x04tes;\x06⪬︀\x03id;\x03∣\x03te;\x03⪬\x02t;\x03⪪", // obf
			// softcy;[ь] solbar;[⌿] solb;[⧄] sopf;[𝕤] sol;[/]. // obf
			"\x05ftcy;\x02ь\x05lbar;\x03⌿\x03lb;\x03⧄\x03pf;\x04𝕤\x02l;\x01/", // obf
			// spadesuit;[♠] spades;[♠] spar;[∥]. // obf
			"\x08adesuit;\x03♠\x05ades;\x03♠\x03ar;\x03∥", // obf
			// sqsubseteq;[⊑] sqsupseteq;[⊒] sqsubset;[⊏] sqsupset;[⊐] sqcaps;[⊓︀] sqcups;[⊔︀] sqsube;[⊑] sqsupe;[⊒] square;[□] squarf;[▪] sqcap;[⊓] sqcup;[⊔] sqsub;[⊏] sqsup;[⊐] squf;[▪] squ;[□]. // obf
			"\x09subseteq;\x03⊑\x09supseteq;\x03⊒\x07subset;\x03⊏\x07supset;\x03⊐\x05caps;\x06⊓︀\x05cups;\x06⊔︀\x05sube;\x03⊑\x05supe;\x03⊒\x05uare;\x03□\x05uarf;\x03▪\x04cap;\x03⊓\x04cup;\x03⊔\x04sub;\x03⊏\x04sup;\x03⊐\x03uf;\x03▪\x02u;\x03□", // obf
			// srarr;[→]. // obf
			"\x04arr;\x03→", // obf
			// ssetmn;[∖] ssmile;[⌣] sstarf;[⋆] sscr;[𝓈]. // obf
			"\x05etmn;\x03∖\x05mile;\x03⌣\x05tarf;\x03⋆\x03cr;\x04𝓈", // obf
			// straightepsilon;[ϵ] straightphi;[ϕ] starf;[★] strns;[¯] star;[☆]. // obf
			"\x0eraightepsilon;\x02ϵ\x0araightphi;\x02ϕ\x04arf;\x03★\x04rns;\x02¯\x03ar;\x03☆", // obf
			// succcurlyeq;[≽] succnapprox;[⪺] subsetneqq;[⫋] succapprox;[⪸] supsetneqq;[⫌] subseteqq;[⫅] subsetneq;[⊊] supseteqq;[⫆] supsetneq;[⊋] subseteq;[⊆] succneqq;[⪶] succnsim;[⋩] supseteq;[⊇] subedot;[⫃] submult;[⫁] subplus;[⪿] subrarr;[⥹] succsim;[≿] supdsub;[⫘] supedot;[⫄] suphsol;[⟉] suphsub;[⫗] suplarr;[⥻] supmult;[⫂] supplus;[⫀] subdot;[⪽] subset;[⊂] subsim;[⫇] subsub;[⫕] subsup;[⫓] succeq;[⪰] supdot;[⪾] supset;[⊃] supsim;[⫈] supsub;[⫔] supsup;[⫖] subnE;[⫋] subne;[⊊] supnE;[⫌] supne;[⊋] subE;[⫅] sube;[⊆] succ;[≻] sung;[♪] sup1;[¹] sup2;[²] sup3;[³] supE;[⫆] supe;[⊇] sub;[⊂] sum;[∑] sup1[¹] sup2[²] sup3[³] sup;[⊃]. // obf
			"\x0acccurlyeq;\x03≽\x0accnapprox;\x03⪺\x09bsetneqq;\x03⫋\x09ccapprox;\x03⪸\x09psetneqq;\x03⫌\x08bseteqq;\x03⫅\x08bsetneq;\x03⊊\x08pseteqq;\x03⫆\x08psetneq;\x03⊋\x07bseteq;\x03⊆\x07ccneqq;\x03⪶\x07ccnsim;\x03⋩\x07pseteq;\x03⊇\x06bedot;\x03⫃\x06bmult;\x03⫁\x06bplus;\x03⪿\x06brarr;\x03⥹\x06ccsim;\x03≿\x06pdsub;\x03⫘\x06pedot;\x03⫄\x06phsol;\x03⟉\x06phsub;\x03⫗\x06plarr;\x03⥻\x06pmult;\x03⫂\x06pplus;\x03⫀\x05bdot;\x03⪽\x05bset;\x03⊂\x05bsim;\x03⫇\x05bsub;\x03⫕\x05bsup;\x03⫓\x05cceq;\x03⪰\x05pdot;\x03⪾\x05pset;\x03⊃\x05psim;\x03⫈\x05psub;\x03⫔\x05psup;\x03⫖\x04bnE;\x03⫋\x04bne;\x03⊊\x04pnE;\x03⫌\x04pne;\x03⊋\x03bE;\x03⫅\x03be;\x03⊆\x03cc;\x03≻\x03ng;\x03♪\x03p1;\x02¹\x03p2;\x02²\x03p3;\x02³\x03pE;\x03⫆\x03pe;\x03⊇\x02b;\x03⊂\x02m;\x03∑\x02p1\x02¹\x02p2\x02²\x02p3\x02³\x02p;\x03⊃", // obf
			// swarrow;[↙] swarhk;[⤦] swnwar;[⤪] swArr;[⇙] swarr;[↙]. // obf
			"\x06arrow;\x03↙\x05arhk;\x03⤦\x05nwar;\x03⤪\x04Arr;\x03⇙\x04arr;\x03↙", // obf
			// szlig;[ß] szlig[ß]. // obf
			"\x04lig;\x02ß\x03lig\x02ß", // obf
			// target;[⌖] tau;[τ]. // obf
			"\x05rget;\x03⌖\x02u;\x02τ", // obf
			// tbrk;[⎴]. // obf
			"\x03rk;\x03⎴", // obf
			// tcaron;[ť] tcedil;[ţ] tcy;[т]. // obf
			"\x05aron;\x02ť\x05edil;\x02ţ\x02y;\x02т", // obf
			// tdot;[⃛]. // obf
			"\x03ot;\x03⃛", // obf
			// telrec;[⌕]. // obf
			"\x05lrec;\x03⌕", // obf
			// tfr;[𝔱]. // obf
			"\x02r;\x04𝔱", // obf
			// thickapprox;[≈] therefore;[∴] thetasym;[ϑ] thicksim;[∼] there4;[∴] thetav;[ϑ] thinsp;[ ] thksim;[∼] theta;[θ] thkap;[≈] thorn;[þ] thorn[þ]. // obf
			"\x0aickapprox;\x03≈\x08erefore;\x03∴\x07etasym;\x02ϑ\x07icksim;\x03∼\x05ere4;\x03∴\x05etav;\x02ϑ\x05insp;\x03 \x05ksim;\x03∼\x04eta;\x02θ\x04kap;\x03≈\x04orn;\x02þ\x03orn\x02þ", // obf
			// timesbar;[⨱] timesb;[⊠] timesd;[⨰] tilde;[˜] times;[×] times[×] tint;[∭]. // obf
			"\x07mesbar;\x03⨱\x05mesb;\x03⊠\x05mesd;\x03⨰\x04lde;\x02˜\x04mes;\x02×\x03mes\x02×\x03nt;\x03∭", // obf
			// topfork;[⫚] topbot;[⌶] topcir;[⫱] toea;[⤨] topf;[𝕥] tosa;[⤩] top;[⊤]. // obf
			"\x06pfork;\x03⫚\x05pbot;\x03⌶\x05pcir;\x03⫱\x03ea;\x03⤨\x03pf;\x04𝕥\x03sa;\x03⤩\x02p;\x03⊤", // obf
			// tprime;[‴]. // obf
			"\x05rime;\x03‴", // obf
			// trianglerighteq;[⊵] trianglelefteq;[⊴] triangleright;[▹] triangledown;[▿] triangleleft;[◃] triangleq;[≜] triangle;[▵] triminus;[⨺] trpezium;[⏢] triplus;[⨹] tritime;[⨻] tridot;[◬] trade;[™] trisb;[⧍] trie;[≜]. // obf
			"\x0eianglerighteq;\x03⊵\x0dianglelefteq;\x03⊴\x0ciangleright;\x03▹\x0biangledown;\x03▿\x0biangleleft;\x03◃\x08iangleq;\x03≜\x07iangle;\x03▵\x07iminus;\x03⨺\x07pezium;\x03⏢\x06iplus;\x03⨹\x06itime;\x03⨻\x05idot;\x03◬\x04ade;\x03™\x04isb;\x03⧍\x03ie;\x03≜", // obf
			// tstrok;[ŧ] tshcy;[ћ] tscr;[𝓉] tscy;[ц]. // obf
			"\x05trok;\x02ŧ\x04hcy;\x02ћ\x03cr;\x04𝓉\x03cy;\x02ц", // obf
			// twoheadrightarrow;[↠] twoheadleftarrow;[↞] twixt;[≬]. // obf
			"\x10oheadrightarrow;\x03↠\x0foheadleftarrow;\x03↞\x04ixt;\x03≬", // obf
			// uArr;[⇑]. // obf
			"\x03rr;\x03⇑", // obf
			// uHar;[⥣]. // obf
			"\x03ar;\x03⥣", // obf
			// uacute;[ú] uacute[ú] uarr;[↑]. // obf
			"\x05cute;\x02ú\x04cute\x02ú\x03rr;\x03↑", // obf
			// ubreve;[ŭ] ubrcy;[ў]. // obf
			"\x05reve;\x02ŭ\x04rcy;\x02ў", // obf
			// ucirc;[û] ucirc[û] ucy;[у]. // obf
			"\x04irc;\x02û\x03irc\x02û\x02y;\x02у", // obf
			// udblac;[ű] udarr;[⇅] udhar;[⥮]. // obf
			"\x05blac;\x02ű\x04arr;\x03⇅\x04har;\x03⥮", // obf
			// ufisht;[⥾] ufr;[𝔲]. // obf
			"\x05isht;\x03⥾\x02r;\x04𝔲", // obf
			// ugrave;[ù] ugrave[ù]. // obf
			"\x05rave;\x02ù\x04rave\x02ù", // obf
			// uharl;[↿] uharr;[↾] uhblk;[▀]. // obf
			"\x04arl;\x03↿\x04arr;\x03↾\x04blk;\x03▀", // obf
			// ulcorner;[⌜] ulcorn;[⌜] ulcrop;[⌏] ultri;[◸]. // obf
			"\x07corner;\x03⌜\x05corn;\x03⌜\x05crop;\x03⌏\x04tri;\x03◸", // obf
			// umacr;[ū] uml;[¨] uml[¨]. // obf
			"\x04acr;\x02ū\x02l;\x02¨\x01l\x02¨", // obf
			// uogon;[ų] uopf;[𝕦]. // obf
			"\x04gon;\x02ų\x03pf;\x04𝕦", // obf
			// upharpoonright;[↾] upharpoonleft;[↿] updownarrow;[↕] upuparrows;[⇈] uparrow;[↑] upsilon;[υ] uplus;[⊎] upsih;[ϒ] upsi;[υ]. // obf
			"\x0dharpoonright;\x03↾\x0charpoonleft;\x03↿\x0adownarrow;\x03↕\x09uparrows;\x03⇈\x06arrow;\x03↑\x06silon;\x02υ\x04lus;\x03⊎\x04sih;\x02ϒ\x03si;\x02υ", // obf
			// urcorner;[⌝] urcorn;[⌝] urcrop;[⌎] uring;[ů] urtri;[◹]. // obf
			"\x07corner;\x03⌝\x05corn;\x03⌝\x05crop;\x03⌎\x04ing;\x02ů\x04tri;\x03◹", // obf
			// uscr;[𝓊]. // obf
			"\x03cr;\x04𝓊", // obf
			// utilde;[ũ] utdot;[⋰] utrif;[▴] utri;[▵]. // obf
			"\x05ilde;\x02ũ\x04dot;\x03⋰\x04rif;\x03▴\x03ri;\x03▵", // obf
			// uuarr;[⇈] uuml;[ü] uuml[ü]. // obf
			"\x04arr;\x03⇈\x03ml;\x02ü\x02ml\x02ü", // obf
			// uwangle;[⦧]. // obf
			"\x06angle;\x03⦧", // obf
			// vArr;[⇕]. // obf
			"\x03rr;\x03⇕", // obf
			// vBarv;[⫩] vBar;[⫨]. // obf
			"\x04arv;\x03⫩\x03ar;\x03⫨", // obf
			// vDash;[⊨]. // obf
			"\x04ash;\x03⊨", // obf
			// vartriangleright;[⊳] vartriangleleft;[⊲] varsubsetneqq;[⫋︀] varsupsetneqq;[⫌︀] varsubsetneq;[⊊︀] varsupsetneq;[⊋︀] varepsilon;[ϵ] varnothing;[∅] varpropto;[∝] varkappa;[ϰ] varsigma;[ς] vartheta;[ϑ] vangrt;[⦜] varphi;[ϕ] varrho;[ϱ] varpi;[ϖ] varr;[↕]. // obf
			"\x0frtriangleright;\x03⊳\x0ertriangleleft;\x03⊲\x0crsubsetneqq;\x06⫋︀\x0crsupsetneqq;\x06⫌︀\x0brsubsetneq;\x06⊊︀\x0brsupsetneq;\x06⊋︀\x09repsilon;\x02ϵ\x09rnothing;\x03∅\x08rpropto;\x03∝\x07rkappa;\x02ϰ\x07rsigma;\x02ς\x07rtheta;\x02ϑ\x05ngrt;\x03⦜\x05rphi;\x02ϕ\x05rrho;\x02ϱ\x04rpi;\x02ϖ\x03rr;\x03↕", // obf
			// vcy;[в]. // obf
			"\x02y;\x02в", // obf
			// vdash;[⊢]. // obf
			"\x04ash;\x03⊢", // obf
			// veebar;[⊻] vellip;[⋮] verbar;[|] veeeq;[≚] vert;[|] vee;[∨]. // obf
			"\x05ebar;\x03⊻\x05llip;\x03⋮\x05rbar;\x01|\x04eeq;\x03≚\x03rt;\x01|\x02e;\x03∨", // obf
			// vfr;[𝔳]. // obf
			"\x02r;\x04𝔳", // obf
			// vltri;[⊲]. // obf
			"\x04tri;\x03⊲", // obf
			// vnsub;[⊂⃒] vnsup;[⊃⃒]. // obf
			"\x04sub;\x06⊂⃒\x04sup;\x06⊃⃒", // obf
			// vopf;[𝕧]. // obf
			"\x03pf;\x04𝕧", // obf
			// vprop;[∝]. // obf
			"\x04rop;\x03∝", // obf
			// vrtri;[⊳]. // obf
			"\x04tri;\x03⊳", // obf
			// vsubnE;[⫋︀] vsubne;[⊊︀] vsupnE;[⫌︀] vsupne;[⊋︀] vscr;[𝓋]. // obf
			"\x05ubnE;\x06⫋︀\x05ubne;\x06⊊︀\x05upnE;\x06⫌︀\x05upne;\x06⊋︀\x03cr;\x04𝓋", // obf
			// vzigzag;[⦚]. // obf
			"\x06igzag;\x03⦚", // obf
			// wcirc;[ŵ]. // obf
			"\x04irc;\x02ŵ", // obf
			// wedbar;[⩟] wedgeq;[≙] weierp;[℘] wedge;[∧]. // obf
			"\x05dbar;\x03⩟\x05dgeq;\x03≙\x05ierp;\x03℘\x04dge;\x03∧", // obf
			// wfr;[𝔴]. // obf
			"\x02r;\x04𝔴", // obf
			// wopf;[𝕨]. // obf
			"\x03pf;\x04𝕨", // obf
			// wp;[℘]. // obf
			"\x01;\x03℘", // obf
			// wreath;[≀] wr;[≀]. // obf
			"\x05eath;\x03≀\x01;\x03≀", // obf
			// wscr;[𝓌]. // obf
			"\x03cr;\x04𝓌", // obf
			// xcirc;[◯] xcap;[⋂] xcup;[⋃]. // obf
			"\x04irc;\x03◯\x03ap;\x03⋂\x03up;\x03⋃", // obf
			// xdtri;[▽]. // obf
			"\x04tri;\x03▽", // obf
			// xfr;[𝔵]. // obf
			"\x02r;\x04𝔵", // obf
			// xhArr;[⟺] xharr;[⟷]. // obf
			"\x04Arr;\x03⟺\x04arr;\x03⟷", // obf
			// xi;[ξ]. // obf
			"\x01;\x02ξ", // obf
			// xlArr;[⟸] xlarr;[⟵]. // obf
			"\x04Arr;\x03⟸\x04arr;\x03⟵", // obf
			// xmap;[⟼]. // obf
			"\x03ap;\x03⟼", // obf
			// xnis;[⋻]. // obf
			"\x03is;\x03⋻", // obf
			// xoplus;[⨁] xotime;[⨂] xodot;[⨀] xopf;[𝕩]. // obf
			"\x05plus;\x03⨁\x05time;\x03⨂\x04dot;\x03⨀\x03pf;\x04𝕩", // obf
			// xrArr;[⟹] xrarr;[⟶]. // obf
			"\x04Arr;\x03⟹\x04arr;\x03⟶", // obf
			// xsqcup;[⨆] xscr;[𝓍]. // obf
			"\x05qcup;\x03⨆\x03cr;\x04𝓍", // obf
			// xuplus;[⨄] xutri;[△]. // obf
			"\x05plus;\x03⨄\x04tri;\x03△", // obf
			// xvee;[⋁]. // obf
			"\x03ee;\x03⋁", // obf
			// xwedge;[⋀]. // obf
			"\x05edge;\x03⋀", // obf
			// yacute;[ý] yacute[ý] yacy;[я]. // obf
			"\x05cute;\x02ý\x04cute\x02ý\x03cy;\x02я", // obf
			// ycirc;[ŷ] ycy;[ы]. // obf
			"\x04irc;\x02ŷ\x02y;\x02ы", // obf
			// yen;[¥] yen[¥]. // obf
			"\x02n;\x02¥\x01n\x02¥", // obf
			// yfr;[𝔶]. // obf
			"\x02r;\x04𝔶", // obf
			// yicy;[ї]. // obf
			"\x03cy;\x02ї", // obf
			// yopf;[𝕪]. // obf
			"\x03pf;\x04𝕪", // obf
			// yscr;[𝓎]. // obf
			"\x03cr;\x04𝓎", // obf
			// yucy;[ю] yuml;[ÿ] yuml[ÿ]. // obf
			"\x03cy;\x02ю\x03ml;\x02ÿ\x02ml\x02ÿ", // obf
			// zacute;[ź]. // obf
			"\x05cute;\x02ź", // obf
			// zcaron;[ž] zcy;[з]. // obf
			"\x05aron;\x02ž\x02y;\x02з", // obf
			// zdot;[ż]. // obf
			"\x03ot;\x02ż", // obf
			// zeetrf;[ℨ] zeta;[ζ]. // obf
			"\x05etrf;\x03ℨ\x03ta;\x02ζ", // obf
			// zfr;[𝔷]. // obf
			"\x02r;\x04𝔷", // obf
			// zhcy;[ж]. // obf
			"\x03cy;\x02ж", // obf
			// zigrarr;[⇝]. // obf
			"\x06grarr;\x03⇝", // obf
			// zopf;[𝕫]. // obf
			"\x03pf;\x04𝕫", // obf
			// zscr;[𝓏]. // obf
			"\x03cr;\x04𝓏", // obf
			// zwnj;[‌] zwj;[‍]. // obf
			"\x03nj;\x03‌\x02j;\x03‍", // obf
		), // obf
		"small_words" => "GT\x00LT\x00gt\x00lt\x00", // obf
		"small_mappings" => array( // obf
			">", // obf
			"<", // obf
			">", // obf
			"<", // obf
		) // obf
	) // obf
); // obf